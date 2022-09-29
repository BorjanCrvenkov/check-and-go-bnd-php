<?php

namespace App\Policies;

use App\Models\BusinessEmployee;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class BusinessEmployeePolicy
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
        return $user->is_business || $user->is_employee;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param BusinessEmployee $businessEmployee
     * @return bool
     */
    public function view(User $user, BusinessEmployee $businessEmployee): bool
    {
        return $user->is_business || $businessEmployee->employee->getKey() === $user->getKey();
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
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param BusinessEmployee $businessEmployee
     * @return bool
     */
    public function delete(User $user, BusinessEmployee $businessEmployee): bool
    {
        return $businessEmployee->business->owner_id === $user->getKey();
    }
}
