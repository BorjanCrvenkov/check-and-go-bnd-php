<?php

namespace Tests\Unit;

use App\Models\Business;
use App\Models\Menu;
use App\Models\MenuItem;

class MenuTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $menu = Menu::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $this->assertSame($business->getKey(), $menu->business->getKey());
    }

    /**
     * @return void
     */
    public function testMenuItemsRelation(): void
    {
        $menu = Menu::factory()->create();

        $menuItemIds = MenuItem::factory(5)->create([
            'menu_id' => $menu->getKey()
        ])->modelKeys();

        $this->assertSame($menuItemIds, $menu->menuItems->modelKeys());
    }
}
