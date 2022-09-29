<?php

namespace ModelTests;

use App\Models\Business;
use App\Models\BusinessEmployee;
use App\Models\BusinessImages;
use App\Models\BusinessPhoneNumber;
use App\Models\BusinessSocialMediaLink;
use App\Models\BusinessTag;
use App\Models\BusinessWorkingHours;
use App\Models\Event;
use App\Models\Menu;
use App\Models\Review;
use App\Models\Table;
use App\Models\User;
use App\Models\UserReviewBusiness;
use App\Models\UserTableReservation;

class BusinessTest extends BaseUnitRelationsTest
{
    /**
     * @return void
     */
    public function testTagsRelation(): void
    {
        $business = Business::factory()->create();

        $businessTagsIds = BusinessTag::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $this->assertSame($businessTagsIds, $business->tags->modelKeys());
    }

    /**
     * @return void
     */
    public function testMenusRelation(): void
    {
        $business = Business::factory()->create();

        $menuIds = Menu::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $this->assertSame($menuIds, $business->menus->modelKeys());

    }

    /**
     * @return void
     */
    public function testImagesRelation(): void
    {
        $business = Business::factory()->create();

        $expectedIds = BusinessImages::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $this->assertSame($expectedIds, $business->images->modelKeys());
    }

    /**
     * @return void
     */
    public function testEmployeesRelation(): void
    {
        $business = Business::factory()->create();

        $expectedIds = BusinessEmployee::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $this->assertSame($expectedIds, $business->employees->modelKeys());
    }

    /**
     * @return void
     */
    public function testOwnerRelation(): void
    {
        $user = User::factory()->business()->create();

        $business = Business::factory()->create([
            'owner_id' => $user->getKey(),
        ]);

        $this->assertSame($user->getKey(), $business->owner->getKey());
    }

    /**
     * @return void
     */
    public function testReviewBusinessesRelation(): void
    {
        $business = Business::factory()->create();

        $expectedIds = UserReviewBusiness::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $this->assertSame($expectedIds, $business->userReviewBusiness->modelKeys());
    }

    public function testReviewsFunction()
    {
        $business = Business::factory()->create();
        $reviewIds = Review::factory(5)->create()->modelKeys();

        foreach ($reviewIds as $reviewId) {
            UserReviewBusiness::factory()->create([
                'business_id' => $business->getKey(),
                'review_id'   => $reviewId
            ]);
        }

        $this->assertSame($reviewIds, $business->reviews()->modelKeys());
    }

    /**
     * @return void
     */
    public function testEventsRelation(): void
    {
        $business = Business::factory()->create();

        $eventIds = Event::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $this->assertSame($eventIds, $business->events->modelKeys());
    }

    /**
     * @return void
     */
    public function testWorkingHoursRelations(): void
    {
        $business = Business::factory()->create();

        $expectedIds = BusinessWorkingHours::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $this->assertSame($expectedIds, $business->workingHours->modelKeys());
    }

    /**
     * @return void
     */
    public function testTablesRelation(): void
    {
        $business = Business::factory()->create();

        $expectedIds = Table::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $this->assertSame($expectedIds, $business->tables->modelKeys());
    }

    /**
     * @return void
     */
    public function testSocialMediaLinksRelation(): void
    {
        $business = Business::factory()->create();

        $expectedIds = BusinessSocialMediaLink::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $actualIds = $business->socialMediaLinks->modelKeys();

        sort($expectedIds);
        sort($actualIds);

        $this->assertSame($expectedIds, $actualIds);
    }

    /**
     * @return void
     */
    public function testPhoneNumbersRelation(): void
    {
        $business = Business::factory()->create();

        $expectedIds = BusinessPhoneNumber::factory(5)->create([
            'business_id' => $business->getKey(),
        ])->modelKeys();

        $actualIds = $business->phoneNumbers->modelKeys();

        sort($expectedIds);
        sort($actualIds);

        $this->assertSame($expectedIds, $actualIds);
    }

    /**
     * @return void
     */
    public function testReservationsFunction(): void
    {
        $business = Business::factory()->create();

        $tables = Table::factory(5)->create([
            'business_id' => $business->getKey()
        ]);

        $userTableReservations = [];
        foreach ($tables as $table) {
            $userTableReservations[] = UserTableReservation::factory()->create([
                'table_id' => $table->getKey(),
            ]);
        }

        $reservationIds = [];
        foreach ($userTableReservations as $item) {
            $reservationIds[] = $item->reservation->getKey();
        }

        $this->assertSame($reservationIds, $business->reservations()->modelKeys());
    }
}
