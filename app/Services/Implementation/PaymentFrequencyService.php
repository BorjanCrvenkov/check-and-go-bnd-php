<?php

namespace App\Services\Implementation;

use App\Models\PaymentFrequency;
use App\Services\BaseService;

class PaymentFrequencyService extends BaseService
{
    /**
     * @param PaymentFrequency $model
     */
    public function __construct(PaymentFrequency $model)
    {
        parent::__construct($model);
    }
}
