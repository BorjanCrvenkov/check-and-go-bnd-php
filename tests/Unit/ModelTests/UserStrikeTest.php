<?php

namespace ModelTests;

use App\Models\Strike;
use App\Models\User;
use App\Models\UserStrike;

class UserStrikeTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testUserRelation(): void
    {
        $user = User::factory()->create();

        $relation = UserStrike::factory()->create([
            'user_id' => $user->getKey(),
        ]);

        $this->assertSame($user->getKey(), $relation->user->getKey());
    }

    /**
     * @return void
     */
    public function testStrikeRelation(): void
    {
        $strike = Strike::factory()->create();

        $relation = UserStrike::factory()->create([
            'strike_id' => $strike->getKey(),
        ]);

        $this->assertSame($strike->getKey(), $relation->strike->getKey());
    }
}
