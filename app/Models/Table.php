<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Table extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function business(): belongsTo
    {
        return $this->belongsTo(Business::class);
    }
}
