<?php

namespace Tests\Unit;

use App\Models\Image;
use App\Models\PaymentPlan;
use App\Models\Role;
use App\Models\User;

class UserTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testImageRelation(): void
    {
        $image = Image::factory()->create();

        $user = User::factory()->create([
            'image_id' => $image->getKey()
        ]);

        $this->assertSame($image->getKey(), $user->image->getKey());
    }

    /**
     * @return void
     */
    public function testRoleRelation(): void
    {
        $role = Role::factory()->create();

        $user = User::factory()->create([
            'role_id' => $role->getKey()
        ]);

        $this->assertSame($role->getKey(), $user->role->getKey());
    }

    /**
     * @return void
     */
    public function testPaymentPlant(): void
    {
        $paymentPlan = PaymentPlan::factory()->create();

        $user = User::factory()->create([
            'payment_plan_id' => $paymentPlan->getKey()
        ]);

        $this->assertSame($paymentPlan->getKey(), $user->paymentPlan->getKey());
    }
}
