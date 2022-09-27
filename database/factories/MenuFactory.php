<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'business_id' => "mixed"])] public function definition(): array
    {
        return [
            'name'        => $this->faker->word() . $this->faker->numberBetween(0, 100000),
            'business_id' => Business::factory(),
        ];
    }
}
