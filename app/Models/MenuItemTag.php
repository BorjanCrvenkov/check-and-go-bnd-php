<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class MenuItemTag extends BaseModel
{
    /**
     * @return HasOne
     */
    public function menuItem(): HasOne
    {
        return $this->hasOne(MenuItem::class, 'id', 'menu_item_id');
    }

    /**
     * @return HasOne
     */
    public function tag(): HasOne
    {
        return $this->hasOne(Tag::class, 'id', 'tag_id');
    }
}
