<?php

namespace Tests\Unit;

use App\Models\Reservation;
use App\Models\Review;
use App\Models\Strike;

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
}
