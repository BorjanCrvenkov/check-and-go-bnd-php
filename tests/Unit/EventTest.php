<?php

namespace Tests\Unit;

use App\Models\Business;
use App\Models\Event;

class EventTest extends BaseUnitRelationsTest
{

    public function testBusinessRelation()
    {
        $business = Business::factory()->create();

        $event = Event::factory()->create([
            'business_id' => $business->getKey()
        ]);

        $this->assertSame($business->getKey(), $event->business->getKey());
    }
}
