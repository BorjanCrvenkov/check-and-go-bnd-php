<?php /** @noinspection ALL */

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Business extends BaseModel
{

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
    public function reservations(): HasMany
    {
        return $this->hasMany(UserBusinessReservation::class, 'business_id');
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
}
