<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class StrikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['description' => "string", 'review_id' => "mixed", 'reservation_id' => "mixed"])] public function definition(): array
    {
        $randNum = rand();
        return [
            'description' => $this->faker->paragraph(),
            'review_id'   => ($randNum % 2 == 0) ? Review::factory() : null,
            'reservation_id' => ($randNum % 2 == 1) ? Reservation::factory() : null,
        ];
    }
}
