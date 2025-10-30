<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(254),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 0, 1000),
            'address' => fake()->text(254),
            'property_type' => "Casa",
            'bedrooms' => fake()->randomNumber(),
            'bathrooms' => fake()->randomNumber(),
            'area' => fake()->randomFloat(2, 0, 1000),
        ];
    }
}
