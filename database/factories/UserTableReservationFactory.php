<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class UserTableReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['user_id' => "mixed", 'table_id' => "mixed", 'reservation_id' => "mixed"])] public function definition(): array
    {
        return [
            'user_id'        => User::factory(),
            'table_id'       => Table::factory(),
            'reservation_id' => Reservation::factory(),
        ];
    }
}
