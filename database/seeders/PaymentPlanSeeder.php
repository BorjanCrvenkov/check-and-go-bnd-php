<?php

namespace Database\Seeders;

use App\Models\PaymentFrequency;
use App\Models\PaymentPlan;
use Illuminate\Database\Seeder;

class PaymentPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        PaymentPlan::factory()
            ->count(4)
            ->sequence(
                [
                    'name'                 => PaymentPlan::BASIC_CUSTOMER_PLAN_NAME,
                    'description'          => PaymentPlan::BASIC_CUSTOMER_PLAN_DESCRIPTION,
                    'price'                => PaymentPlan::BASIC_CUSTOMER_PLAN_PRICE,
                    'payment_frequency_id' => PaymentFrequency::first()->getKey(),
                ],
                [
                    'name'                 => PaymentPlan::PREMIUM_CUSTOMER_PLAN_NAME,
                    'description'          => PaymentPlan::PREMIUM_CUSTOMER_PLAN_DESCRIPTION,
                    'price'                => PaymentPlan::PREMIUM_CUSTOMER_PLAN_PRICE,
                    'payment_frequency_id' => PaymentFrequency::first()->getKey(),
                ],
                [
                    'name'                 => PaymentPlan::BASIC_BUSINESS_PLAN_NAME,
                    'description'          => PaymentPlan::BASIC_BUSINESS_PLAN_DESCRIPTION,
                    'price'                => PaymentPlan::BASIC_BUSINESS_PLAN_PRICE,
                    'payment_frequency_id' => PaymentFrequency::first()->getKey(),
                ],
                [
                    'name'                 => PaymentPlan::PREMIUM_BUSINESS_PLAN_NAME,
                    'description'          => PaymentPlan::PREMIUM_BUSINESS_PLAN_DESCRIPTION,
                    'price'                => PaymentPlan::PREMIUM_BUSINESS_PLAN_PRICE,
                    'payment_frequency_id' => PaymentFrequency::first()->getKey(),
                ],
            )
            ->create();
    }
}
