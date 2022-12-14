<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class PaymentFrequencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string"])] public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word() .$this->faker->numberBetween(0, 10000),
        ];
    }
}
