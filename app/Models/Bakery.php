<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Bakery extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'logo',
        'address',
        'phone',
        'opening_hours',
        'status',
        'delivery_time',
        'user_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
