<?php

namespace ModelTests;

use App\Models\Business;
use App\Models\BusinessPhoneNumber;

class BusinessPhoneNumberTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $relation = BusinessPhoneNumber::factory()->create([
            'business_id' => $business,
        ]);

        $this->assertSame($business->getKey(), $relation->business->getKey());
    }
}
