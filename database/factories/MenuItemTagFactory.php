<?php

namespace Database\Factories;

use App\Models\MenuItem;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class MenuItemTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['menu_item_id' => "mixed", 'tag_id' => "mixed"])] public function definition(): array
    {
        return [
            'menu_item_id' => MenuItem::factory(),
            'tag_id'       => Tag::factory(),
        ];
    }
}
