<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'number_of_seats' => "int", 'business_id' => "mixed"])] public function definition(): array
    {
        return [
            'name'            => $this->faker->word() . $this->faker->randomNumber(),
            'number_of_seats' => $this->faker->numberBetween(1, 7),
            'business_id'     => Business::factory(),
        ];
    }
}
