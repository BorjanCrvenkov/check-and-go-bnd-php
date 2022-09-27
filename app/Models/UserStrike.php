<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class UserStrike extends BaseModel
{
    /**
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * @return HasOne
     */
    public function strike(): HasOne
    {
        return $this->hasOne(Strike::class, 'id', 'strike_id');
    }
}
