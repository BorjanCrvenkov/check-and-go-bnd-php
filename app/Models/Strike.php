<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class Strike extends BaseModel
{
    /**
     * @return HasOne
     */
    public function reservation(): HasOne
    {
        return $this->hasOne(Reservation::class);
    }

    /**
     * @return HasOne
     */
    public function review(): HasOne
    {
        return $this->hasOne(Review::class);
    }
}
