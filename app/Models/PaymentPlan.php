<?php /** @noinspection ALL */

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentPlan extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function paymentFrequency(): BelongsTo
    {
        return $this->belongsTo(PaymentFrequency::class);
    }
}
