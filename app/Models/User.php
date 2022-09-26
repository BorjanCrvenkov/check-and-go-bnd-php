<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends BaseUserModel
{
    /**
     * @return string
     */
    public function getFullNameAttribute(): string
    {
        return ucwords("{$this->first_name} {$this->last_name}");
    }

    /**
     * @return bool
     */
    public function getIsAdminAttribute(): bool
    {
        return $this->role->name === Role::ADMINISTRATOR;
    }

    /**
     * @return bool
     */
    public function getIsBusinessAttribute(): bool
    {
        return $this->role->name === Role::BUSINESS;
    }

    /**
     * @return bool
     */
    public function getIsCustomerAttribute(): bool
    {
        return $this->role->name === Role::CUSTOMER;
    }

    /**
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute(string $value): void
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * @return HasOne
     */
    public function image(): hasOne
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

    /**
     * @return HasOne
     */
    public function role(): hasOne
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    /**
     * @return HasOne
     */
    public function paymentPlan(): hasOne
    {
        return $this->hasOne(PaymentPlan::class, 'id', 'payment_plan_id');
    }

    /**
     * @return HasMany
     */
    public function strikes(): hasMany
    {
        return $this->hasMany(Strike::class, 'user_id');
    }

    /**
     * @return HasMany
     */
    public function reviews(): hasMany
    {
        return $this->hasMany(Review::class, 'user_id');
    }

    /**
     * @return HasMany
     */
    public function reservations(): hasMany
    {
        return $this->hasMany(Reservation::class, 'user_id');
    }

    /**
     * @return HasMany
     */
    public function favouriteBusinesses(): hasMany
    {
        return $this->hasMany(Business::class, 'user_id');
    }

    /**
     * @return HasMany
     */
    public function phoneNumbers(): hasMany
    {
        return $this->hasMany(UserPhoneNumber::class, 'user_id');
    }
}
