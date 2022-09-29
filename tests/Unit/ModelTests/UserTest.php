<?php

namespace ModelTests;

use App\Models\Business;
use App\Models\Image;
use App\Models\PaymentPlan;
use App\Models\Role;
use App\Models\User;
use App\Models\UserStrike;

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

    /**
     * @return void
     */
    public function testUserStrikeRelation(): void
    {
        $user = User::factory()->customer()->create();

        $expectedIds = UserStrike::factory(5)->create([
            'user_id' => $user->getKey(),
        ])->modelKeys();

        $this->assertSame($expectedIds, $user->strikes->modelKeys());
    }

    public function testOwnsBusinessesRelation(){
        $user = User::factory()->business()->create();

        $expectedIds = Business::factory(2)->create([
            'owner_id' => $user->getKey(),
        ])->modelKeys();

        $this->assertSame($expectedIds, $user->ownsBusinesses->modelKeys());
    }
}
