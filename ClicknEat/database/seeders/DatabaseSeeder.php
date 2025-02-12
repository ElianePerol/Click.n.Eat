<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Item;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Manually adds one line in the table
        // Restaurant::create([
        //     'name' => 'Punjab'
        // ]);

        // use the factory create to hydrate the table with fake entries

        Restaurant::factory(3)->create();
        
        Category::factory(10)->create();

        Item::factory(20)->create();

    }
}
