<?php

namespace ModelTests;

use App\Models\Business;
use App\Models\BusinessWorkingHours;
use App\Models\WorkingHour;

class BusinessWorkingHoursTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $relation = BusinessWorkingHours::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $this->assertSame($business->getKey(), $relation->business->getKey());
    }

    /**
     * @return void
     */
    public function testWorkingHourRelation(): void
    {
        $workingHour = WorkingHour::factory()->create();

        $relation = BusinessWorkingHours::factory()->create([
            'working_hours_id' => $workingHour->getKey(),
        ]);

        $this->assertSame($workingHour->getKey(), $relation->workingHour->getKey());
    }
}
