<?php

namespace App\Services\Implementation;

use App\Models\BusinessSocialMediaLink;
use App\Services\BaseService;

class BusinessSocialMediaLinkService extends BaseService
{
    /**
     * @param BusinessSocialMediaLink $model
     */
    public function __construct(BusinessSocialMediaLink $model)
    {
        parent::__construct($model);
    }
}
