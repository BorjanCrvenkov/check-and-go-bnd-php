<?php /** @noinspection PhpPossiblePolymorphicInvocationInspection */

namespace Database\Seeders;

use App\Models\Business;
use App\Models\PaymentPlan;
use App\Models\Table;
use App\Models\User;
use App\Models\UserFavouriteBusiness;
use App\Models\UserPhoneNumber;
use App\Models\UserReviewBusiness;
use App\Models\UserTableReservation;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $basicPaymentPlan = PaymentPlan::where('name', '=', PaymentPlan::BASIC_CUSTOMER_PLAN_NAME)->first();

        $users = User::factory(25)
            ->customer()
            ->has(UserPhoneNumber::factory(), 'phoneNumbers')
            ->create([
                'payment_plan_id' => $basicPaymentPlan->getKey(),
            ]);

        foreach ($users as $user) {
            UserFavouriteBusiness::factory()->create([
                'user_id'     => $user->getKey(),
                'business_id' => Business::inRandomOrder()->first()->getKey(),
            ]);
        }

        $premiumPaymentPlan = PaymentPlan::where('name', '=', PaymentPlan::PREMIUM_CUSTOMER_PLAN_NAME)->first();

        $users = User::factory(20)
            ->customer()
            ->has(UserPhoneNumber::factory(), 'phoneNumbers')
            ->create([
                'payment_plan_id' => $premiumPaymentPlan->getKey(),
            ]);

        foreach ($users as $user) {
            UserFavouriteBusiness::factory()->create([
                'user_id'     => $user->getKey(),
                'business_id' => Business::inRandomOrder()->first()->getKey(),
            ]);

            UserTableReservation::factory()->create([
                'user_id'  => $user->getKey(),
                'table_id' => Table::inRandomOrder()->first()->getKey(),
            ]);

            UserTableReservation::factory()->create([
                'user_id'  => $user->getKey(),
                'table_id' => Table::inRandomOrder()->first()->getKey(),
            ]);

            UserTableReservation::factory()->create([
                'user_id'  => $user->getKey(),
                'table_id' => Table::inRandomOrder()->first()->getKey(),
            ]);

            UserReviewBusiness::factory()->create([
                'user_id'     => $user->getKey(),
                'business_id' => Business::inRandomOrder()->first()->getKey(),
            ]);

            UserReviewBusiness::factory()->create([
                'user_id'     => $user->getKey(),
                'business_id' => Business::inRandomOrder()->first()->getKey(),
            ]);
        }
    }
}
