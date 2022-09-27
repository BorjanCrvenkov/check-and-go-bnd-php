<?php

namespace Tests\Unit;

use App\Models\Business;
use App\Models\Table;

class TableTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $table = Table::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $this->assertSame($business->getKey(), $table->business->getKey());
    }
}
