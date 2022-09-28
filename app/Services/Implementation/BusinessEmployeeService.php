<?php

namespace App\Services\Implementation;

use App\Models\BusinessEmployee;
use App\Services\BaseService;

class BusinessEmployeeService extends BaseService
{
    /**
     * @param BusinessEmployee $model
     */
    public function __construct(BusinessEmployee $model)
    {
        parent::__construct($model);
    }
}
