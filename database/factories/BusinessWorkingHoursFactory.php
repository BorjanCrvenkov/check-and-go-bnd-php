<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\WorkingHour;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class BusinessWorkingHoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['business_id' => "mixed", 'working_hours_id' => "mixed"])] public function definition(): array
    {
        return [
            'business_id'      => Business::factory(),
            'working_hours_id' => WorkingHour::factory(),
        ];
    }
}
