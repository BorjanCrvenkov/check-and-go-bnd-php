<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'description' => "string", 'price' => "int", 'image_id' => "mixed", 'menu_id' => "mixed"])] public function definition(): array
    {
        return [
            'name'        => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price'       => $this->faker->numberBetween(50, 10000),
            'image_id'    => Image::factory(),
            'menu_id'     => Menu::factory(),
        ];
    }
}
