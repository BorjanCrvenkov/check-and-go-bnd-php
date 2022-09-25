<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }
}
