<?php

namespace ModelTests;

use App\Models\MenuItem;
use App\Models\MenuItemTag;
use App\Models\Tag;

class MenuItemTagTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testMenuItemRelation(): void
    {
        $menuItem = MenuItem::factory()->create();

        $relation = MenuItemTag::factory()->create([
            'menu_item_id' => $menuItem->getKey()
        ]);

        $this->assertSame($menuItem->getKey(), $relation->menuItem->getKey());
    }

    /**
     * @return void
     */
    public function testTagRelation(): void
    {
        $tag = Tag::factory()->create();

        $relation = MenuItemTag::factory()->create([
            'tag_id' => $tag->getKey()
        ]);

        $this->assertSame($tag->getKey(), $relation->tag->getKey());
    }
}
