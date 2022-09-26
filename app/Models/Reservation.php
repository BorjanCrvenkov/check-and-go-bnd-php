<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function userTableReservation(): belongsTo
    {
        return $this->belongsTo(UserTableReservation::class);
    }
}
