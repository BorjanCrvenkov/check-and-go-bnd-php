<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusinessWorkingHours extends BaseModel
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
    public function workingHour(): BelongsTo
    {
        return $this->belongsTo(WorkingHour::class, 'working_hours_id');
    }
}
