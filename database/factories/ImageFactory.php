<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'link' => "mixed", 'extension' => "string"])] public function definition(): array
    {
        return [
            'name'      => $this->faker->unique()->word() . $this->faker->numberBetween(0, 100000),
            'link'      => $this->faker->filePath(),
            'extension' => '.jpg',
        ];
    }
}
