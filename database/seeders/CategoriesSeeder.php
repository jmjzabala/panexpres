<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            'Baguette',
            'Integral',
            'Dulces',
            'Artisanal',
            'Sin gluten',
            'Bollería',
            'Salados',
        ];

        $categories = collect();
        foreach ($names as $name) {
            $categories->push(Category::firstOrCreate(['name' => $name], [
                'description' => "Categoría {$name}",
                'image' => 'https://placehold.co/400x300?text=' . urlencode($name),
            ]));
        }

        // Attach random categories to existing products
        Product::all()->each(function (Product $product) use ($categories) {
            $pick = $categories->random(rand(1, 3))->pluck('id')->toArray();
            $product->categories()->sync($pick, false);
        });
    }
}
