<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WorkingHour;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class WorkingHourPolicy
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
     * @param WorkingHour $workingHour
     * @return bool
     */
    public function view(User $user, WorkingHour $workingHour): bool
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
     * @param WorkingHour $workingHour
     * @return bool|false
     */
    public function update(User $user, WorkingHour $workingHour): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param WorkingHour $workingHour
     * @return bool|false
     */
    public function delete(User $user, WorkingHour $workingHour): bool
    {
        return false;
    }
}
