<?php

namespace Database\Factories;

use App\Models\Strike;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class UserStrikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['user_id' => "mixed", 'strike_id' => "mixed"])] public function definition(): array
    {
        return [
            'user_id'   => User::factory(),
            'strike_id' => Strike::factory(),
        ];
    }
}
