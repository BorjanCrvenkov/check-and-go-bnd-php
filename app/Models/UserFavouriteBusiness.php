<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class UserFavouriteBusiness extends BaseModel
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
    public function business(): HasOne
    {
        return $this->hasOne(Business::class, 'id', 'business_id');
    }
}
