<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentPlan extends BaseModel
{
    final public const BASIC_CUSTOMER_PLAN_NAME = 'BASIC CUSTOMER PLAN';
    final public const BASIC_CUSTOMER_PLAN_DESCRIPTION = 'The user on this plan will only be able to check if business tables are free and sort and filter businesses.';
    final public const BASIC_CUSTOMER_PLAN_PRICE = 0;

    final public const PREMIUM_CUSTOMER_PLAN_NAME = 'PREMIUM CUSTOMER PLAN';
    final public const PREMIUM_CUSTOMER_PLAN_DESCRIPTION = 'The user on this plan will be able to check if business tables are free, sort and filter businesses, make reservations and leave reviews.';
    final public const PREMIUM_CUSTOMER_PLAN_PRICE = 100;

    final public const BASIC_BUSINESS_PLAN_NAME = 'BASIC BUSINESS PLAN';
    final public const BASIC_BUSINESS_PLAN_DESCRIPTION = 'The user on this plan will only be able to register one business';
    final public const BASIC_BUSINESS_PLAN_PRICE = 1500;

    final public const PREMIUM_BUSINESS_PLAN_NAME = 'PREMIUM BUSINESS PLAN';
    final public const PREMIUM_BUSINESS_PLAN_DESCRIPTION = 'The user on this plan will be able to register more than one business and will have the option to generate reports and buy additional promotions';
    final public const PREMIUM_BUSINESS_PLAN_PRICE = 3000;

    /**
     * @return BelongsTo
     */
    public function paymentFrequency(): BelongsTo
    {
        return $this->belongsTo(PaymentFrequency::class);
    }
}
