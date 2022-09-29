<?php

namespace App\Policies;

use App\Models\PaymentPlan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentPlanPolicy
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
     * @param PaymentPlan $paymentPlan
     * @return bool
     */
    public function view(User $user, PaymentPlan $paymentPlan): bool
    {
        return true;
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
     * @param PaymentPlan $paymentPlan
     * @return bool|false
     */
    public function update(User $user, PaymentPlan $paymentPlan): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param PaymentPlan $paymentPlan
     * @return bool|false
     */
    public function delete(User $user, PaymentPlan $paymentPlan): bool
    {
        return false;
    }
}
