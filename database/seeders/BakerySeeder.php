<?php

namespace Database\Seeders;

use App\Models\Bakery;
use App\Models\Product;
use App\Models\Combo;
use App\Models\User;
use Illuminate\Database\Seeder;

class BakerySeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        Bakery::factory()->count(3)->create(['user_id' => $user?->id ?? 1])->each(function (Bakery $bakery) {
            // create products for each bakery
            $products = Product::factory()->count(6)->create(['bakery_id' => $bakery->id]);

            // create 2 combos per bakery
            Combo::factory()->count(2)->create(['bakery_id' => $bakery->id])->each(function (Combo $combo) use ($products) {
                // attach 2-4 random products to combo with quantities and optional price overrides
                $selected = $products->random(rand(2, 4));
                foreach ($selected as $product) {
                    $combo->products()->attach($product->id, [
                        'quantity' => rand(1, 3),
                        'price_override' => rand(0, 1) ? null : round($product->price * (0.8 + rand(0, 20) / 100), 2),
                    ]);
                }
            });
        });
    }
}
