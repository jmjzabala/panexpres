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
        return [
            'bakery_id' => Bakery::factory(),
            'name' => $this->faker->word . ' ' . $this->faker->word,
            'description' => $this->faker->sentence(8),
            'price' => $this->faker->randomFloat(2, 1, 20),
            'image' => 'https://placehold.co/640x480?text=food+est',
            'stock' => $this->faker->numberBetween(0, 50),
            'is_active' => true,
        ];
    }
}
