<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class WorkingHourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['day' => "string", 'opening_time' => "\DateTime", 'closing_time' => "\DateTime"])] public function definition(): array
    {
        return [
            'day'          => $this->faker->dayOfWeek(),
            'opening_time' => $this->faker->dateTimeInInterval('-4 hours', '+8 hours'),
            'closing_time' => $this->faker->dateTimeInInterval('-4 hours', '+8 hours'),
        ];
    }
}
