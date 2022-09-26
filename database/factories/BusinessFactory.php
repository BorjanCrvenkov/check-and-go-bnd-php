<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'address' => "string", 'rating' => "int"])] public function definition(): array
    {
        return [
            'name'    => $this->faker->unique()->word,
            'address' => $this->faker->address(),
            'rating'  => 0,
        ];
    }
}
