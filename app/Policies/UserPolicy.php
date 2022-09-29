<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $authUser
     * @return bool|null
     */
    public function before(User $authUser): ?bool
    {
        if ($authUser->is_admin) {
            return true;
        }

        return null;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param User $authUser
     * @return bool
     */
    public function viewAny(User $authUser): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $authUser
     * @param User $modelUser
     * @return bool
     */
    public function view(User $authUser, User $modelUser): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $authUser
     * @return bool|false
     */
    public function create(User $authUser): bool
    {
        return $authUser->is_business;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $authUser
     * @param User $modelUser
     * @return bool|false
     */
    public function update(User $authUser, User $modelUser): bool
    {
        if ($authUser->is_bussiness && $modelUser->is_employee) {
            foreach ($authUser->ownsBusinesses as $business) {
                if ($business->employees->containts($modelUser->getKey())) {
                    return true;
                }
            }
        }

        return $authUser->getKey() === $modelUser->getKey();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $authUser
     * @param User $modelUser
     * @return bool|false
     */
    public function delete(User $authUser, User $modelUser): bool
    {
        if ($authUser->is_bussiness && $modelUser->is_employee) {
            foreach ($authUser->ownsBusinesses as $business) {
                if ($business->employees->containts($modelUser->getKey())) {
                    return true;
                }
            }
        }

        return $authUser->getKey() === $modelUser->getKey();
    }
}
