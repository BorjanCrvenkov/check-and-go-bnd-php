<?php /** @noinspection ALL */

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function userBusinessReservation(): belongsTo
    {
        return $this->belongsTo(UserBusinessReservation::class);
    }

}
