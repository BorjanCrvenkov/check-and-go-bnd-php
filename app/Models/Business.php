<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Business extends BaseModel
{
    /**
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    /**
     * @return HasMany
     */
    public function tags(): HasMany
    {
        return $this->hasMany(BusinessTag::class, 'business_id');
    }

    /**
     * @return HasMany
     */
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class, 'business_id');
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(BusinessImages::class, 'business_id');
    }

    /**
     * @return HasMany
     */
    public function employees(): HasMany
    {
        return $this->hasMany(BusinessEmployee::class, 'business_id');
    }

    /**
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(UserReviewBusiness::class, 'business_id');
    }

    /**
     * @return HasMany
     */
    public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'business_id');
    }

    /**
     * @return HasMany
     */
    public function workingHours(): HasMany
    {
        return $this->hasMany(BusinessWorkingHours::class, 'business_id');
    }

    /**
     * @return HasMany
     */
    public function tables(): HasMany
    {
        return $this->hasMany(Table::class, 'business_id');
    }

    /**
     * @return HasMany
     */
    public function socialMediaLinks(): HasMany
    {
        return $this->hasMany(BusinessSocialMediaLink::class, 'business_id');
    }

    /**
     * @return HasMany
     */
    public function phoneNumbers(): hasMany
    {
        return $this->hasMany(BusinessPhoneNumber::class, 'business_id');
    }

    /**
     * @return mixed
     */
    public function reservations(): mixed
    {
        return Business::where('businesses.id', '=', $this->getKey())
            ->join('tables', 'businesses.id', '=', 'tables.business_id')
            ->join('user_table_reservations', 'tables.id', '=', 'user_table_reservations.table_id')
            ->join('reservations', 'user_table_reservations.reservation_id', '=', 'reservations.id')
            ->select('reservations.*')->get();
    }
}
