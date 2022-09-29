<?php

namespace App\Policies;

use App\Models\BusinessPhoneNumber;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class BusinessPhoneNumberPolicy
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
     * @param BusinessPhoneNumber $businessPhoneNumber
     * @return bool
     */
    public function view(User $user, BusinessPhoneNumber $businessPhoneNumber): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function create(User $user): Response|bool
    {
        return $user->is_business;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param BusinessPhoneNumber $businessPhoneNumber
     * @return Response|bool
     */
    public function update(User $user, BusinessPhoneNumber $businessPhoneNumber): Response|bool
    {
        return $user->is_business;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param BusinessPhoneNumber $businessPhoneNumber
     * @return Response|bool
     */
    public function delete(User $user, BusinessPhoneNumber $businessPhoneNumber): Response|bool
    {
        return $user->is_business;
    }
}
