<?php

namespace App\Services\Implementation;

use App\Models\WorkingHour;
use App\Services\BaseService;

class WorkingHourService extends BaseService
{
    /**
     * @param WorkingHour $model
     */
    public function __construct(WorkingHour $model)
    {
        parent::__construct($model);
    }
}
