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
        return $this->hasOne(MenuItem::class);
    }

    /**
     * @return HasOne
     */
    public function Tag(): HasOne
    {
        return $this->hasOne(Tag::class);
    }
}
