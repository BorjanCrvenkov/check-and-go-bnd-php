<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusinessTag extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    /**
     * @return BelongsTo
     */
    public function ta(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
