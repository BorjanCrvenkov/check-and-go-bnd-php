<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class BusinessImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['business_id' => "mixed", 'image_id' => "mixed"])] public function definition(): array
    {
        return [
            'business_id' => Business::factory(),
            'image_id'    => Image::factory(),
        ];
    }
}
