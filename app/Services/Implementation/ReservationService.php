<?php

namespace App\Services\Implementation;

use App\Models\Reservation;
use App\Services\BaseService;

class ReservationService extends BaseService
{
    /**
     * @param Reservation $model
     */
    public function __construct(Reservation $model)
    {
        parent::__construct($model);
    }
}
