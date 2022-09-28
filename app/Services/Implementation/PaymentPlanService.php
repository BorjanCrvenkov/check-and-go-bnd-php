<?php

namespace App\Services\Implementation;

use App\Models\PaymentPlan;
use App\Services\BaseService;

class PaymentPlanService extends BaseService
{
    /**
     * @param PaymentPlan $model
     */
    public function __construct(PaymentPlan $model)
    {
        parent::__construct($model);
    }
}
