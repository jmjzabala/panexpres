<?php

namespace Database\Factories;

use App\Models\Combo;
use App\Models\Bakery;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComboFactory extends Factory
{
    protected $model = Combo::class;

    public function definition()
    {
        $discountType = $this->faker->randomElement([null, 'percent', 'fixed']);
        $discountValue = null;
        if ($discountType === 'percent') {
            $discountValue = $this->faker->numberBetween(5, 30);
        } elseif ($discountType === 'fixed') {
            $discountValue = $this->faker->randomFloat(2, 1, 10);
        }

        return [
            'bakery_id' => Bakery::factory(),
            'name' => 'Combo ' . $this->faker->word,
            'description' => $this->faker->sentence(8),
            'price' => null,
            'image' => 'https://placehold.co/640x480?text=food+est',
            'discount_type' => $discountType,
            'discount_value' => $discountValue,
            'is_active' => true,
        ];
    }
}
