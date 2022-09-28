<?php

namespace App\Services\Implementation;

use App\Models\UserReviewBusiness;
use App\Services\BaseService;

class UserReviewBusinessService extends BaseService
{
    /**
     * @param UserReviewBusiness $model
     */
    public function __construct(UserReviewBusiness $model)
    {
        parent::__construct($model);
    }
}
