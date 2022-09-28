<?php

namespace App\Services\Implementation;

use App\Models\Business;
use App\Services\BaseService;

class BusinessService extends BaseService
{
    /**
     * @param Business $model
     */
    public function __construct(Business $model)
    {
        parent::__construct($model);
    }
}
