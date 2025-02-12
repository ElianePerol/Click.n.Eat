<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            "cost" => fake()->randomNumber(4, true),
            "price" => fake()->randomNumber(4, true),
            "is_active" => fake()->boolean(0.5),
            "category_id" => random_int(1, 10)  
        ];
    }
}
