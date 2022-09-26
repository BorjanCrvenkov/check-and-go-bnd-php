<?php /** @noinspection DuplicatedCode */

/** @noinspection PhpPossiblePolymorphicInvocationInspection */

namespace Database\Seeders;

use App\Models\Business;
use App\Models\BusinessEmployee;
use App\Models\BusinessImages;
use App\Models\BusinessPhoneNumber;
use App\Models\BusinessSocialMediaLink;
use App\Models\BusinessTag;
use App\Models\BusinessWorkingHours;
use App\Models\Event;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\MenuItemTag;
use App\Models\PaymentPlan;
use App\Models\Table;
use App\Models\Tag;
use App\Models\User;
use App\Models\WorkingHour;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $basicPaymentPlan = PaymentPlan::where('name', '=', PaymentPlan::BASIC_BUSINESS_PLAN_NAME)->first();

        $businessUser = User::factory()->business()->create([
            'payment_plan_id' => $basicPaymentPlan->getKey(),
        ]);

        $business = Business::factory()
            ->has(BusinessPhoneNumber::factory(2), 'phoneNumbers')
            ->has(BusinessSocialMediaLink::factory(3), 'socialMediaLinks')
            ->has(BusinessImages::factory(8), 'images')
            ->create([
                'owner_id' => $businessUser->getKey(),
            ]);

        $menu = Menu::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $menuItems = MenuItem::factory(10)->create([
            'menu_id' => $menu->getKey(),
        ]);

        foreach ($menuItems as $menuItem) {
            MenuItemTag::factory()->create([
                'menu_item_id' => $menuItem->getKey(),
                'tag_id'       => Tag::inRandomOrder()->first()->getKey(),
            ]);
        }

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessTag::factory()->create([
            'business_id' => $business->getKey(),
            'tag_id'      => Tag::inRandomOrder()->first()->getKey(),
        ]);

        Event::factory(4)->create([
            'business_id' => $business->getKey(),
        ]);

        $employees = User::factory(5)->employee()->create([
            'payment_plan_id' => null,
        ]);

        foreach ($employees as $employee) {
            BusinessEmployee::factory()->create([
                'business_id' => $business->getKey(),
                'user_id'     => $employee->getKey(),
            ]);
        }

        Table::factory(10)->create([
            'business_id' => $business->getKey(),
        ]);

        $businessUser = User::factory()->business()->create([
            'payment_plan_id' => $basicPaymentPlan->getKey(),
        ]);

        $business = Business::factory()
            ->has(BusinessPhoneNumber::factory(2), 'phoneNumbers')
            ->has(BusinessSocialMediaLink::factory(3), 'socialMediaLinks')
            ->has(BusinessImages::factory(8), 'images')
            ->create([
                'owner_id' => $businessUser->getKey(),
            ]);

        $menu = Menu::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $menuItems = MenuItem::factory(10)->create([
            'menu_id' => $menu->getKey(),
        ]);

        foreach ($menuItems as $menuItem) {
            MenuItemTag::factory()->create([
                'menu_item_id' => $menuItem->getKey(),
                'tag_id'       => Tag::inRandomOrder()->first()->getKey(),
            ]);
        }

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessTag::factory()->create([
            'business_id' => $business->getKey(),
            'tag_id'      => Tag::inRandomOrder()->first()->getKey(),
        ]);

        Event::factory(4)->create([
            'business_id' => $business->getKey(),
        ]);

        $employees = User::factory(5)->employee()->create([
            'payment_plan_id' => null,
        ]);

        foreach ($employees as $employee) {
            BusinessEmployee::factory()->create([
                'business_id' => $business->getKey(),
                'user_id'     => $employee->getKey(),
            ]);
        }

        Table::factory(10)->create([
            'business_id' => $business->getKey(),
        ]);

        $businessUser = User::factory()->business()->create([
            'payment_plan_id' => $basicPaymentPlan->getKey(),
        ]);

        $business = Business::factory()
            ->has(BusinessPhoneNumber::factory(2), 'phoneNumbers')
            ->has(BusinessSocialMediaLink::factory(3), 'socialMediaLinks')
            ->has(BusinessImages::factory(8), 'images')
            ->create([
                'owner_id' => $businessUser->getKey(),
            ]);

        $menu = Menu::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $menuItems = MenuItem::factory(10)->create([
            'menu_id' => $menu->getKey(),
        ]);

        foreach ($menuItems as $menuItem) {
            MenuItemTag::factory()->create([
                'menu_item_id' => $menuItem->getKey(),
                'tag_id'       => Tag::inRandomOrder()->first()->getKey(),
            ]);
        }

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessTag::factory()->create([
            'business_id' => $business->getKey(),
            'tag_id'      => Tag::inRandomOrder()->first()->getKey(),
        ]);

        Event::factory(4)->create([
            'business_id' => $business->getKey(),
        ]);

        $employees = User::factory(5)->employee()->create([
            'payment_plan_id' => null,
        ]);

        foreach ($employees as $employee) {
            BusinessEmployee::factory()->create([
                'business_id' => $business->getKey(),
                'user_id'     => $employee->getKey(),
            ]);
        }

        Table::factory(10)->create([
            'business_id' => $business->getKey(),
        ]);

        $businessUser = User::factory()->business()->create([
            'payment_plan_id' => $basicPaymentPlan->getKey(),
        ]);

        $business = Business::factory()
            ->has(BusinessPhoneNumber::factory(2), 'phoneNumbers')
            ->has(BusinessSocialMediaLink::factory(3), 'socialMediaLinks')
            ->has(BusinessImages::factory(8), 'images')
            ->create([
                'owner_id' => $businessUser->getKey(),
            ]);

        $menu = Menu::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $menuItems = MenuItem::factory(10)->create([
            'menu_id' => $menu->getKey(),
        ]);

        foreach ($menuItems as $menuItem) {
            MenuItemTag::factory()->create([
                'menu_item_id' => $menuItem->getKey(),
                'tag_id'       => Tag::inRandomOrder()->first()->getKey(),
            ]);
        }
        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessTag::factory()->create([
            'business_id' => $business->getKey(),
            'tag_id'      => Tag::inRandomOrder()->first()->getKey(),
        ]);

        Event::factory(4)->create([
            'business_id' => $business->getKey(),
        ]);

        $employees = User::factory(5)->employee()->create([
            'payment_plan_id' => null,
        ]);

        foreach ($employees as $employee) {
            BusinessEmployee::factory()->create([
                'business_id' => $business->getKey(),
                'user_id'     => $employee->getKey(),
            ]);
        }

        Table::factory(10)->create([
            'business_id' => $business->getKey(),
        ]);

        $premiumPaymentPlan = PaymentPlan::where('name', '=', PaymentPlan::PREMIUM_BUSINESS_PLAN_NAME)->first();

        $businessUser = User::factory()->business()->create([
            'payment_plan_id' => $premiumPaymentPlan->getKey(),
        ]);

        $business = Business::factory()
            ->has(BusinessPhoneNumber::factory(2), 'phoneNumbers')
            ->has(BusinessSocialMediaLink::factory(3), 'socialMediaLinks')
            ->has(BusinessImages::factory(8), 'images')
            ->create([
                'owner_id' => $businessUser->getKey(),
            ]);

        $menu = Menu::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $menuItems = MenuItem::factory(10)->create([
            'menu_id' => $menu->getKey(),
        ]);

        foreach ($menuItems as $menuItem) {
            MenuItemTag::factory()->create([
                'menu_item_id' => $menuItem->getKey(),
                'tag_id'       => Tag::inRandomOrder()->first()->getKey(),
            ]);
        }

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessTag::factory()->create([
            'business_id' => $business->getKey(),
            'tag_id'      => Tag::inRandomOrder()->first()->getKey(),
        ]);

        Event::factory(4)->create([
            'business_id' => $business->getKey(),
        ]);

        $employees = User::factory(5)->employee()->create([
            'payment_plan_id' => null,
        ]);

        foreach ($employees as $employee) {
            BusinessEmployee::factory()->create([
                'business_id' => $business->getKey(),
                'user_id'     => $employee->getKey(),
            ]);
        }

        Table::factory(10)->create([
            'business_id' => $business->getKey(),
        ]);

        $business = Business::factory()
            ->has(BusinessPhoneNumber::factory(2), 'phoneNumbers')
            ->has(BusinessSocialMediaLink::factory(3), 'socialMediaLinks')
            ->has(BusinessImages::factory(8), 'images')
            ->create([
                'owner_id' => $businessUser->getKey(),
            ]);

        $menu = Menu::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $menuItems = MenuItem::factory(10)->create([
            'menu_id' => $menu->getKey(),
        ]);

        foreach ($menuItems as $menuItem) {
            MenuItemTag::factory()->create([
                'menu_item_id' => $menuItem->getKey(),
                'tag_id'       => Tag::inRandomOrder()->first()->getKey(),
            ]);
        }

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessTag::factory()->create([
            'business_id' => $business->getKey(),
            'tag_id'      => Tag::inRandomOrder()->first()->getKey(),
        ]);

        Event::factory(4)->create([
            'business_id' => $business->getKey(),
        ]);

        $employees = User::factory(5)->employee()->create([
            'payment_plan_id' => null,
        ]);

        foreach ($employees as $employee) {
            BusinessEmployee::factory()->create([
                'business_id' => $business->getKey(),
                'user_id'     => $employee->getKey(),
            ]);
        }

        Table::factory(10)->create([
            'business_id' => $business->getKey(),
        ]);

        $businessUser = User::factory()->business()->create([
            'payment_plan_id' => $premiumPaymentPlan->getKey(),
        ]);

        $business = Business::factory()
            ->has(BusinessPhoneNumber::factory(2), 'phoneNumbers')
            ->has(BusinessSocialMediaLink::factory(3), 'socialMediaLinks')
            ->has(BusinessImages::factory(8), 'images')
            ->create([
                'owner_id' => $businessUser->getKey(),
            ]);

        $menu = Menu::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $menuItems = MenuItem::factory(10)->create([
            'menu_id' => $menu->getKey(),
        ]);

        foreach ($menuItems as $menuItem) {
            MenuItemTag::factory()->create([
                'menu_item_id' => $menuItem->getKey(),
                'tag_id'       => Tag::inRandomOrder()->first()->getKey(),
            ]);
        }

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessTag::factory()->create([
            'business_id' => $business->getKey(),
            'tag_id'      => Tag::inRandomOrder()->first()->getKey(),
        ]);

        Event::factory(4)->create([
            'business_id' => $business->getKey(),
        ]);

        $employees = User::factory(5)->employee()->create([
            'payment_plan_id' => null,
        ]);

        foreach ($employees as $employee) {
            BusinessEmployee::factory()->create([
                'business_id' => $business->getKey(),
                'user_id'     => $employee->getKey(),
            ]);
        }

        Table::factory(10)->create([
            'business_id' => $business->getKey(),
        ]);

        $business = Business::factory()
            ->has(BusinessPhoneNumber::factory(2), 'phoneNumbers')
            ->has(BusinessSocialMediaLink::factory(3), 'socialMediaLinks')
            ->has(BusinessImages::factory(8), 'images')
            ->create([
                'owner_id' => $businessUser->getKey(),
            ]);

        $menu = Menu::factory()->create([
            'business_id' => $business->getKey(),
        ]);

        $menuItems = MenuItem::factory(10)->create([
            'menu_id' => $menu->getKey(),
        ]);

        foreach ($menuItems as $menuItem) {
            MenuItemTag::factory()->create([
                'menu_item_id' => $menuItem->getKey(),
                'tag_id'       => Tag::inRandomOrder()->first()->getKey(),
            ]);
        }

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessWorkingHours::factory()->create([
            'business_id'      => $business->getKey(),
            'working_hours_id' => WorkingHour::inRandomOrder()->first()->getKey()
        ]);

        BusinessTag::factory()->create([
            'business_id' => $business->getKey(),
            'tag_id'      => Tag::inRandomOrder()->first()->getKey(),
        ]);

        Event::factory(4)->create([
            'business_id' => $business->getKey(),
        ]);

        $employees = User::factory(5)->employee()->create([
            'payment_plan_id' => null,
        ]);

        foreach ($employees as $employee) {
            BusinessEmployee::factory()->create([
                'business_id' => $business->getKey(),
                'user_id'     => $employee->getKey(),
            ]);
        }

        Table::factory(10)->create([
            'business_id' => $business->getKey(),
        ]);
    }
}
