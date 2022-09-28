<?php

namespace App\Services\Implementation;

use App\Models\BusinessPhoneNumber;
use App\Services\BaseService;

class BusinessPhoneNumberService extends BaseService
{
    /**
     * @param BusinessPhoneNumber $model
     */
    public function __construct(BusinessPhoneNumber $model)
    {
        parent::__construct($model);
    }
}
