<?php

namespace App\Policies;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class MenuPolicy
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
     * @param Menu $menu
     * @return bool
     */
    public function view(User $user, Menu $menu): bool
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
     * @param Menu $menu
     * @return bool
     */
    public function update(User $user, Menu $menu): bool
    {
        return $menu->business->owner_id === $user->getKey();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Menu $menu
     * @return bool
     */
    public function delete(User $user, Menu $menu): bool
    {
        return $menu->business->owner_id === $user->getKey();
    }
}
