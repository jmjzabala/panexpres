<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => ucfirst($this->faker->unique()->word),
            'description' => $this->faker->sentence(6),
            'image' => 'https://placehold.co/100x100?text=CAT',
            'item_menu' => '0',
            'item_submenu' => '0',
            'posicion_menu' => 0,
        ];
    }
}
