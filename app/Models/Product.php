<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'bakery_id',
        'name',
        'description',
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
}
