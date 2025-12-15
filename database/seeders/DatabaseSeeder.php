<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::firstOrCreate([
            'email' => 'admin@panexpres.com',
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('password'),
        ]);

        // Seed bakeries, products and combos
        $this->call([
            BakerySeeder::class,
        ]); */

        // Seed categories and attach to products
        $this->call([
            // CategoriesSeeder::class,
            RolesAndPermissionsSeeder::class,
        ]);
    }
}
