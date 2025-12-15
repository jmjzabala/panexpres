<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;
use App\Models\Bakery;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Combo extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'bakery_id',
        'name',
        'description',
        'price',
        'slug',
        'image',
        'discount_type',
        'discount_value',
        'is_active',
    ];

    public function bakery(): BelongsTo
    {
        return $this->belongsTo(Bakery::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'combo_product')
            ->withPivot(['quantity', 'price_override'])
            ->withTimestamps();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->usingSeparator('-')
            ->preventOverwrite()
            ->doNotGenerateSlugsOnUpdate();
    }

    /**
     * Calculate total price of the combo based on included products and discount.
     */
    public function calculatePrice(): float
    {
        $total = 0.0;
        foreach ($this->products as $product) {
            $qty = $product->pivot->quantity ?? 1;
            $unit = $product->pivot->price_override ?? $product->price ?? 0;
            $total += (float) $unit * (int) $qty;
        }

        if ($this->price !== null) {
            $total = (float) $this->price;
        }

        if ($this->discount_type && $this->discount_value) {
            if ($this->discount_type === 'percent') {
                $total = $total * (1 - ((float) $this->discount_value / 100));
            } else {
                $total = max(0, $total - (float) $this->discount_value);
            }
        }

        return round($total, 2);
    }
}
