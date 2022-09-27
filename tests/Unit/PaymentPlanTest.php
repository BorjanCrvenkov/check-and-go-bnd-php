<?php

namespace Tests\Unit;

use App\Models\PaymentFrequency;
use App\Models\PaymentPlan;

class PaymentPlanTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testPaymentFrequencyRelation(): void
    {
        $paymentFrequency = PaymentFrequency::factory()->create();

        $paymentPlan = PaymentPlan::factory()->create([
            'payment_frequency_id' => $paymentFrequency->getKey(),
        ]);

        $this->assertSame($paymentFrequency->getKey(), $paymentPlan->paymentFrequency->getKey());
    }
}
