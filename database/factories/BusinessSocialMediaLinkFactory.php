<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class BusinessSocialMediaLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['business_id' => "mixed", 'social_media_link' => "mixed"])] public function definition(): array
    {
        return [
            'business_id'       => Business::factory(),
            'social_media_link' => $this->faker->filePath(),
        ];
    }
}
