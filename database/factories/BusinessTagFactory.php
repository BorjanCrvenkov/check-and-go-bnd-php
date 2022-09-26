<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class BusinessTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['business_id' => "mixed", 'tag_id' => "mixed"])] public function definition(): array
    {
        return [
            'business_id' => Business::factory(),
            'tag_id'      => Tag::factory(),
        ];
    }
}
