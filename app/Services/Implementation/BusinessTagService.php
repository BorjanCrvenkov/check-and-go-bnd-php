<?php

namespace App\Services\Implementation;

use App\Models\Tag;
use App\Services\BaseService;

class BusinessTagService extends BaseService
{
    /**
     * @param Tag $model
     */
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }
}
