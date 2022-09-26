<?php

namespace Database\Seeders;

use App\Models\PaymentFrequency;
use Illuminate\Database\Seeder;

class PaymentFrequencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        PaymentFrequency::factory()
            ->count(4)
            ->sequence(
                ['name' => 'Monthly'],
                ['name' => 'Every three months'],
                ['name' => 'Every six months'],
                ['name' => 'Yearly']
            )->create();
    }
}
