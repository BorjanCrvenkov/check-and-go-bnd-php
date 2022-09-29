<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserStrike;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserStrikePolicy
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
     * @param UserStrike $userStrike
     * @return bool
     */
    public function view(User $user, UserStrike $userStrike): bool
    {
        return $userStrike->user_id === $user->getKey();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool|false
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param UserStrike $userStrike
     * @return bool|false
     */
    public function update(User $user, UserStrike $userStrike): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param UserStrike $userStrike
     * @return bool|false
     */
    public function delete(User $user, UserStrike $userStrike): bool
    {
        return false;
    }
}
