<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'bakery_id',
        'name',
        'description',
        'slug',
        'price',
        'image',
        'stock',
        'is_active',
        'discount',
        'old_price',
    ];

    public function bakery()
    {
        return $this->belongsTo(Bakery::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product')
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
}
