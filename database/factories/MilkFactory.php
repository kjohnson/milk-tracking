<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Milk>
 */
class MilkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => fake()->range(1, 10, 0.25),
            'storage_type' => fake()->randomElement(['fridge', 'frozen', 'thawed']),
            'notes' => fake()->optional()->sentence(5),
        ];
    }
}
