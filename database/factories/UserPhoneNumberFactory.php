<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class UserPhoneNumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['user_id' => "mixed", 'phone_number' => "string"])] public function definition(): array
    {
        return [
            'user_id'      => User::factory(),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
