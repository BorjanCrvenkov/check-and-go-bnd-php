<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['body' => "string", 'rating' => "float"])] public function definition(): array
    {
        return [
            'body'   => $this->faker->paragraph(),
            'rating' => $this->faker->randomFloat(2, 0, 10),
        ];
    }
}
