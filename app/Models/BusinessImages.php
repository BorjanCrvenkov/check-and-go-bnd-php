<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusinessImages extends BaseModel
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
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
