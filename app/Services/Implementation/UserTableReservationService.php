<?php

namespace App\Services\Implementation;

use App\Models\UserTableReservation;
use App\Services\BaseService;

class UserTableReservationService extends BaseService
{
    /**
     * @param UserTableReservation $model
     */
    public function __construct(UserTableReservation $model)
    {
        parent::__construct($model);
    }
}
