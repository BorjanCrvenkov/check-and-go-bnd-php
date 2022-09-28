<?php

namespace App\Services\Implementation;

use App\Models\BusinessImages;
use App\Services\BaseService;

class BusinessImageService extends BaseService
{
    /**
     * @param BusinessImages $model
     */
    public function __construct(BusinessImages $model)
    {
        parent::__construct($model);
    }
}
