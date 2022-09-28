<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BusinessEmployeeController;
use App\Http\Controllers\BusinessImagesController;
use App\Http\Controllers\BusinessPhoneNumberController;
use App\Http\Controllers\BusinessSocialMediaLinkController;
use App\Http\Controllers\BusinessTagController;
use App\Http\Controllers\BusinessWorkingHoursController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\MenuItemTagController;
use App\Http\Controllers\PaymentFrequencyController;
use App\Http\Controllers\PaymentPlanController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StrikeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFavouriteBusinessController;
use App\Http\Controllers\UserPhoneNumberController;
use App\Http\Controllers\UserReviewBusinessController;
use App\Http\Controllers\UserStrikeController;
use App\Http\Controllers\UserTableReservationController;
use App\Http\Controllers\WorkingHourController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->controller(LoginController::class)->group(function () {

    Route::post('/login', 'login')->name('login');

    Route::middleware('auth:sanctum')->group(function () {

        Route::post('/logout', 'logout')->name('logout');

        Route::get('/me', 'getAuthenticatedUser')->name('getAuthenticatedUser');

        Route::get('/refreshToken', 'refreshToken')->name('refreshToken');
    });
});

Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('businesses', BusinessController::class);

    Route::apiResource('businessEmployees', BusinessEmployeeController::class)->except([
        'update',
    ]);

    Route::apiResource('businessImages', BusinessImagesController::class)->except([
        'update',
    ]);

    Route::apiResource('businessPhoneNumbers', BusinessPhoneNumberController::class);

    Route::apiResource('businessSocialMediaLinks', BusinessSocialMediaLinkController::class);

    Route::apiResource('businessTags', BusinessTagController::class)->except([
        'update',
    ]);

    Route::apiResource('businessWorkingHours', BusinessWorkingHoursController::class);

    Route::apiResource('events', EventController::class);

    Route::apiResource('images', ImageController::class)->except([
        'update',
    ]);

    Route::apiResource('menus', MenuController::class);

    Route::apiResource('menuItems', MenuItemController::class);

    Route::apiResource('menuItemTags', MenuItemTagController::class)->except([
        'update',
    ]);

    Route::apiResource('paymentFrequencies', PaymentFrequencyController::class);

    Route::apiResource('paymentPlans', PaymentPlanController::class);

    Route::apiResource('reservations', ReservationController::class);

    Route::apiResource('reviews', ReviewController::class);

    Route::apiResource('roles', RoleController::class);

    Route::apiResource('strikes', StrikeController::class);

    Route::apiResource('tables', TableController::class);

    Route::apiResource('tags', TagController::class);

    Route::apiResource('users', UserController::class);

    Route::apiResource('userFavouriteBusinesses', UserFavouriteBusinessController::class)->except([
        'update',
    ]);

    Route::apiResource('userPhoneNumbers', UserPhoneNumberController::class);

    Route::apiResource('userReviewBusinesses', UserReviewBusinessController::class);

    Route::apiResource('userStrikes', UserStrikeController::class);

    Route::apiResource('userTableReservations', UserTableReservationController::class)->except([
        'update',
    ]);

    Route::apiResource('workingHours', WorkingHourController::class);
});
