<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Bakery;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        // Generate a base price, optionally apply a discount and set old_price accordingly
        $basePrice = $this->faker->randomFloat(2, 1, 20);
        $hasDiscount = $this->faker->boolean(35); // ~35% chance to have a discount
        $discount = null;
        $price = $basePrice;
        $oldPrice = null;

        if ($hasDiscount) {
            $discount = $this->faker->numberBetween(5, 30); // percent
            $oldPrice = $basePrice;
            $price = round($basePrice * (1 - ($discount / 100)), 2);
        }

        return [
            'bakery_id' => Bakery::factory(),
            'name' => $this->faker->word . ' ' . $this->faker->word,
            'description' => $this->faker->sentence(8),
            'price' => $price,
            'old_price' => $oldPrice,
            'discount' => $discount,
            'image' => 'https://placehold.co/640x480?text=food+est',
            'stock' => $this->faker->numberBetween(0, 50),
            'is_active' => true,
        ];
    }
}
