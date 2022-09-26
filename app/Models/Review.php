<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function userReviewBusiness(): belongsTo
    {
        return $this->belongsTo(UserReviewBusiness::class);
    }
}
