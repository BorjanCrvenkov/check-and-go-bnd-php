<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['time_from' => "\Illuminate\Support\Carbon", 'time_to' => "\Illuminate\Support\Carbon"])] public function definition(): array
    {
        return [
            'time_from' => $this->faker->dateTimeThisMonth(),
            'time_to'   => $this->faker->dateTimeThisMonth(),
        ];
    }
}
