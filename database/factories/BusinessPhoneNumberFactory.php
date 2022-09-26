<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class BusinessPhoneNumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['business_id' => "mixed", 'phone_number' => "string"])] public function definition(): array
    {
        return [
            'business_id'  => Business::factory(),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
