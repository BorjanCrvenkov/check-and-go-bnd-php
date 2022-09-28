<?php

namespace App\Services\Implementation;

use App\Models\BusinessWorkingHours;
use App\Services\BaseService;

class BusinessWorkingHoursService extends BaseService
{
    /**
     * @param BusinessWorkingHours $model
     */
    public function __construct(BusinessWorkingHours $model)
    {
        parent::__construct($model);
    }
}
