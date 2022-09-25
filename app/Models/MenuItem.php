<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuItem extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
