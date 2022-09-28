<?php

namespace App\Services\Implementation;

use App\Models\Strike;
use App\Services\BaseService;

class StrikeService extends BaseService
{
    /**
     * @param Strike $model
     */
    public function __construct(Strike $model)
    {
        parent::__construct($model);
    }
}
