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
    #[ArrayShape(['link' => "mixed", 'extension' => "string"])] public function definition(): array
    {
        return [
            'link'      => $this->faker->filePath(),
            'extension' => '.jpg',
        ];
    }
}
