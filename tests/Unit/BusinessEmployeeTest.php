<?php

namespace Tests\Unit;

use App\Models\Business;
use App\Models\BusinessEmployee;
use App\Models\User;

class BusinessEmployeeTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testEmployeeRelation(): void
    {
        $employee = User::factory()->employee()->create();

        $relation = BusinessEmployee::factory()->create([
            'employee_id' => $employee->getKey(),
        ]);

        $this->assertSame($employee->getKey(), $relation->employee->getKey());
    }

    /**
     * @return void
     */
    public function testBusinessRelation(): void
    {
        $business = Business::factory()->create();

        $relation = BusinessEmployee::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $this->assertSame($business->getKey(), $relation->business->getKey());
    }
}
