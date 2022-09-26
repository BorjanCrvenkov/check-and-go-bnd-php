<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\User;
use App\Models\UserReviewBusiness;
use Illuminate\Database\Seeder;

class UserReviewBusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        UserReviewBusiness::factory()->create([
            'user_id'     => User::inRandomOrder()->first()->getKey(),
            'business_id' => Business::inRandomOrder()->first()->getKey(),
        ]);
    }
}
