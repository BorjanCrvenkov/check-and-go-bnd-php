<?php

namespace ModelTests;

use App\Models\Business;
use App\Models\User;
use App\Models\UserFavouriteBusiness;

class UserFavouriteBusinessTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testUserRelation(): void
    {
        $user = User::factory()->create();

        $relation = UserFavouriteBusiness::factory()->create([
            'user_id' => $user->getKey(),
        ]);

        $this->assertSame($user->getKey(), $relation->user->getKey());
    }

    /**
     * @return void
     */
    function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $relation = UserFavouriteBusiness::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $this->assertSame($business->getKey(), $relation->business->getKey());
    }
}
