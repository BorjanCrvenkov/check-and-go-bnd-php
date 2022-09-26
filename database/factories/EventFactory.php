<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'description' => "array|string", 'start_time' => "\Illuminate\Support\Carbon", 'end_time' => "\Illuminate\Support\Carbon", 'business_id' => "mixed"])] public function definition(): array
    {
        return [
            'name'        => $this->faker->word(),
            'description' => $this->faker->paragraphs(2, true),
            'start_time'  => $this->faker->dateTimeThisYear(),
            'end_time'    => $this->faker->dateTimeThisYear(),
            'business_id' => Business::factory(),
        ];
    }
}
