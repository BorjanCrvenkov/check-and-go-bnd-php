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
        return $this->hasOne(Reservation::class, 'id', 'reservation_id');
    }

    /**
     * @return HasOne
     */
    public function review(): HasOne
    {
        return $this->hasOne(Review::class, 'id', 'review_id');
    }

    /**
     * @return HasOne
     */
    public function userStrike(): HasOne
    {
        return $this->hasOne(UserStrike::class, 'strike_id');
    }
}
