<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserPhoneNumber;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPhoneNumberPolicy
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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param UserPhoneNumber $userPhoneNumber
     * @return bool
     */
    public function view(User $user, UserPhoneNumber $userPhoneNumber): bool
    {
        return $userPhoneNumber->user_id === $user->getKey();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param UserPhoneNumber $userPhoneNumber
     * @return bool
     */
    public function update(User $user, UserPhoneNumber $userPhoneNumber): bool
    {
        return $userPhoneNumber->user_id === $user->getKey();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param UserPhoneNumber $userPhoneNumber
     * @return bool
     */
    public function delete(User $user, UserPhoneNumber $userPhoneNumber): bool
    {
        return $userPhoneNumber->user_id === $user->getKey();
    }
}
