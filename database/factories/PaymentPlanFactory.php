<?php

namespace Database\Factories;

use App\Models\PaymentFrequency;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class PaymentPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'description' => "string", 'payment_frequency_id' => "mixed", 'price' => "int"])] public function definition(): array
    {
        return [
            'name'                 => $this->faker->word() .$this->faker->numberBetween(0, 100000),
            'description'          => $this->faker->paragraph(),
            'payment_frequency_id' => PaymentFrequency::factory(),
            'price'                => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
