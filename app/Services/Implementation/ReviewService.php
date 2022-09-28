<?php

namespace App\Services\Implementation;

use App\Models\Review;
use App\Services\BaseService;

class ReviewService extends BaseService
{
    /**
     * @param Review $model
     */
    public function __construct(Review $model)
    {
        parent::__construct($model);
    }
}
