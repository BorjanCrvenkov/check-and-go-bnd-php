<?php

namespace Tests\Unit;

use App\Models\Business;
use App\Models\Review;
use App\Models\User;
use App\Models\UserReviewBusiness;

class UserReviewBusinessTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testUserRelation(): void
    {
        $user = User::factory()->create();

        $relation = UserReviewBusiness::factory()->create([
            'user_id' => $user->getKey(),
        ]);

        $this->assertSame($user->getKey(), $relation->user->getKey());
    }

    /**
     * @return void
     */
    public function testReviewRelation(): void
    {
        $review = Review::factory()->create();

        $relation = UserReviewBusiness::factory()->create([
            'review_id' => $review->getKey(),
        ]);

        $this->assertSame($review->getKey(), $relation->review->getKey());
    }

    /**
     * @return void
     */
    public function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $relation = UserReviewBusiness::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $this->assertSame($business->getKey(), $relation->business->getKey());
    }
}
