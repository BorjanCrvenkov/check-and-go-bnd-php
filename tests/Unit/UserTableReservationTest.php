<?php

namespace Tests\Unit;


use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
use App\Models\UserTableReservation;

class UserTableReservationTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testUserRelation(): void
    {
        $user = User::factory()->create();

        $relation = UserTableReservation::factory()->create([
            'user_id' => $user->getKey()
        ]);

        $this->assertSame($user->getKey(), $relation->user->getKey());
    }

    /**
     * @return void
     */
    public function testTableRelation(): void
    {
        $table = Table::factory()->create();

        $relation = UserTableReservation::factory()->create([
            'table_id' => $table->getKey()
        ]);

        $this->assertSame($table->getKey(), $relation->table->getKey());
    }

    /**
     * @return void
     */
    public function testReservationRelation(): void
    {
        $reservation = Reservation::factory()->create();

        $relation = UserTableReservation::factory()->create([
            'reservation_id' => $reservation->getKey()
        ]);

        $this->assertSame($reservation->getKey(), $relation->reservation->getKey());
    }
}
