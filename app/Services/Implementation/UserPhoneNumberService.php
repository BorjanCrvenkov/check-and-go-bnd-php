<?php

namespace App\Services\Implementation;

use App\Models\UserPhoneNumber;
use App\Services\BaseService;

class UserPhoneNumberService extends BaseService
{
    /**
     * @param UserPhoneNumber $model
     */
    public function __construct(UserPhoneNumber $model)
    {
        parent::__construct($model);
    }
}
