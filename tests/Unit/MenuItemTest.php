<?php

namespace Tests\Unit;

use App\Models\Image;
use App\Models\Menu;
use App\Models\MenuItem;

class MenuItemTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testMenuRelation(): void
    {
        $menu = Menu::factory()->create();

        $menuItem = MenuItem::factory()->create([
            'menu_id' => $menu->getKey(),
        ]);

        $this->assertSame($menu->getKey(), $menuItem->menu->getKey());
    }

    /**
     * @return void
     */
    public function testImageRelation(): void
    {
        $image = Image::factory()->create();

        $menuItem = MenuItem::factory()->create([
            'image_id' => $image->getKey(),
        ]);

        $this->assertSame($image->getKey(), $menuItem->image->getKey());
    }
}
