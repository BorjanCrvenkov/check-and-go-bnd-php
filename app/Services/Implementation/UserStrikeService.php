<?php

namespace App\Services\Implementation;

use App\Models\UserStrike;
use App\Services\BaseService;

class UserStrikeService extends BaseService
{
    /**
     * @param UserStrike $model
     */
    public function __construct(UserStrike $model)
    {
        parent::__construct($model);
    }
}
