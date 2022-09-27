<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class BusinessEmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['employee_id' => "mixed", 'business_id' => "mixed"])] public function definition(): array
    {
        return [
            'employee_id'     => User::factory(),
            'business_id' => Business::factory(),
        ];
    }
}
