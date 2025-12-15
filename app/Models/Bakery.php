<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bakery extends Model
{
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
