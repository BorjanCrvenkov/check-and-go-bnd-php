<?php

namespace ModelTests;

use App\Models\Reservation;
use App\Models\Review;
use App\Models\Strike;
use App\Models\UserStrike;

class StrikeTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testReviewRelation(): void
    {
        $review = Review::factory()->create();

        $strike = Strike::factory()->create([
            'review_id' => $review->getKey(),
        ]);

        $this->assertSame($review->getKey(), $strike->review->getKey());
    }

    /**
     * @return void
     */
    public function testReservationRelation(): void
    {
        $reservation = Reservation::factory()->create();

        $strike = Strike::factory()->create([
            'reservation_id' => $reservation->getKey(),
        ]);

        $this->assertSame($reservation->getKey(), $strike->reservation->getKey());
    }

    public function testUserStrikeRelation()
    {
        $strike = Strike::factory()->create();

        $expectedId = UserStrike::factory()->create([
            'strike_id' => $strike->getKey(),
        ])->getKey();

        $this->assertSame($expectedId, $strike->userStrike->getKey());
    }
}
