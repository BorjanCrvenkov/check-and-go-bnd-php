<?php

namespace ModelTests;

use App\Models\Business;
use App\Models\BusinessSocialMediaLink;

class BusinessSocialMediaTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $relation = BusinessSocialMediaLink::factory()->create([
            'business_id' => $business,
        ]);

        $this->assertSame($business->getKey(), $relation->business->getKey());
    }
}
