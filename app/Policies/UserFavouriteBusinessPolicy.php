<?php

namespace App\Policies;

use App\Models\PaymentPlan;
use App\Models\User;
use App\Models\UserFavouriteBusiness;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserFavouriteBusinessPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return bool|null
     */
    public function before(User $user): ?bool
    {
        if ($user->is_admin) {
            return true;
        }

        return null;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->is_customer && $user->paymentPlan->name === PaymentPlan::PREMIUM_CUSTOMER_PLAN_NAME;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param UserFavouriteBusiness $userFavouriteBusiness
     * @return bool
     */
    public function view(User $user, UserFavouriteBusiness $userFavouriteBusiness): bool
    {
        return $userFavouriteBusiness->user_id === $user->getKey();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->is_customer && $user->paymentPlan->name === PaymentPlan::PREMIUM_CUSTOMER_PLAN_NAME;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param UserFavouriteBusiness $userFavouriteBusiness
     * @return bool
     */
    public function delete(User $user, UserFavouriteBusiness $userFavouriteBusiness): bool
    {
        return $userFavouriteBusiness->user_id === $user->getKey();
    }
}
