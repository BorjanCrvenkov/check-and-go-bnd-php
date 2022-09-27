<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\UserPhoneNumber;

class UserPhoneNumberTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testUserRelation(): void
    {
        $user = User::factory()->create();

        $relation = UserPhoneNumber::factory()->create([
            'user_id' => $user,
        ]);

        $this->assertSame($user->getKey(), $relation->user->getKey());
    }
}
