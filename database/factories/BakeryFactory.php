<?php

namespace Database\Factories;

use App\Models\Bakery;
use Illuminate\Database\Eloquent\Factories\Factory;

class BakeryFactory extends Factory
{
    protected $model = Bakery::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company . ' Panadería',
            'description' => $this->faker->sentence(10),
            'logo' => null,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'opening_hours' => '08:00-18:00',
            'status' => $this->faker->randomElement(['open', 'closed']),
            'delivery_time' => $this->faker->numberBetween(15, 60),
            'user_id' => 1,
        ];
    }
}
