<?php

namespace Database\Seeders;

use App\Models\WorkingHour;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WorkingHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $daysNames = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday',
        ];

        $openingHours = [
            '07:00',
            '07:30',
            '08:00',
            '08:30',
            '09:00',
        ];

        $closingHours = [
            '23:00',
            '23:30',
            '00:00',
            '00:30',
            '01:00',
        ];

        foreach ($daysNames as $day) {
            foreach ($openingHours as $oHour) {
                foreach ($closingHours as $cHour) {
                    WorkingHour::factory()->create([
                        'day'          => $day,
                        'opening_time' => Carbon::parse($oHour),
                        'closing_time' => Carbon::parse($cHour),
                    ]);
                }
            }
        }
    }
}
