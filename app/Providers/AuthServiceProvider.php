<?php

namespace App\Providers;

use App\Models\Business;
use App\Models\BusinessEmployee;
use App\Models\BusinessImages;
use App\Models\BusinessPhoneNumber;
use App\Models\BusinessSocialMediaLink;
use App\Models\BusinessTag;
use App\Models\BusinessWorkingHours;
use App\Models\Event;
use App\Models\Image;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\PaymentFrequency;
use App\Models\PaymentPlan;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Role;
use App\Models\Strike;
use App\Models\Table;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserFavouriteBusiness;
use App\Models\UserPhoneNumber;
use App\Models\UserReviewBusiness;
use App\Models\UserStrike;
use App\Models\UserTableReservation;
use App\Models\WorkingHour;
use App\Policies\BusinessEmployeePolicy;
use App\Policies\BusinessImagesPolicy;
use App\Policies\BusinessPhoneNumberPolicy;
use App\Policies\BusinessPolicy;
use App\Policies\BusinessSocialMediaLinkPolicy;
use App\Policies\BusinessTagPolicy;
use App\Policies\BusinessWorkingHoursPolicy;
use App\Policies\EventPolicy;
use App\Policies\ImagePolicy;
use App\Policies\MenuItemPolicy;
use App\Policies\MenuPolicy;
use App\Policies\PaymentFrequencyPolicy;
use App\Policies\PaymentPlanPolicy;
use App\Policies\ReservationPolicy;
use App\Policies\ReviewPolicy;
use App\Policies\RolePolicy;
use App\Policies\StrikePolicy;
use App\Policies\TablePolicy;
use App\Policies\TagPolicy;
use App\Policies\UserFavouriteBusinessPolicy;
use App\Policies\UserPhoneNumberPolicy;
use App\Policies\UserPolicy;
use App\Policies\UserReviewBusinessPolicy;
use App\Policies\UserStrikePolicy;
use App\Policies\UserTableReservationPolicy;
use App\Policies\WorkingHourPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Business::class                => BusinessPolicy::class,
        BusinessEmployee::class        => BusinessEmployeePolicy::class,
        BusinessImages::class          => BusinessImagesPolicy::class,
        BusinessPhoneNumber::class     => BusinessPhoneNumberPolicy::class,
        BusinessSocialMediaLink::class => BusinessSocialMediaLinkPolicy::class,
        BusinessTag::class             => BusinessTagPolicy::class,
        BusinessWorkingHours::class    => BusinessWorkingHoursPolicy::class,
        Event::class                   => EventPolicy::class,
        Image::class                   => ImagePolicy::class,
        Menu::class                    => MenuPolicy::class,
        MenuItem::class                => MenuItemPolicy::class,
        PaymentFrequency::class        => PaymentFrequencyPolicy::class,
        PaymentPlan::class             => PaymentPlanPolicy::class,
        Reservation::class             => ReservationPolicy::class,
        Review::class                  => ReviewPolicy::class,
        Role::class                    => RolePolicy::class,
        Strike::class                  => StrikePolicy::class,
        Table::class                   => TablePolicy::class,
        Tag::class                     => TagPolicy::class,
        User::class                    => UserPolicy::class,
        UserFavouriteBusiness::class   => UserFavouriteBusinessPolicy::class,
        UserPhoneNumber::class         => UserPhoneNumberPolicy::class,
        UserReviewBusiness::class      => UserReviewBusinessPolicy::class,
        UserStrike::class              => UserStrikePolicy::class,
        UserTableReservation::class    => UserTableReservationPolicy::class,
        WorkingHour::class             => WorkingHourPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerPolicies();

        //
    }
}
