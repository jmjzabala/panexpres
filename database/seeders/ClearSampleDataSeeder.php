<?php

namespace Database\Seeders;

use App\Models\Bakery;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClearSampleDataSeeder extends Seeder
{
    public function run(): void
    {
        // Find the test user used by the sample seeders
        $user = User::where('email', 'test@example.com')->first();

        if (! $user) {
            $this->command->info('Test user not found; nothing to clear.');
            return;
        }

        // Delete bakeries created by that user (cascades to products, combos, pivot)
        $count = Bakery::where('user_id', $user->id)->count();
        if ($count > 0) {
            Bakery::where('user_id', $user->id)->get()->each->delete();
            $this->command->info("Deleted {$count} bakeries and related data for test user.");
        } else {
            $this->command->info('No bakeries found for test user.');
        }
    }
}
