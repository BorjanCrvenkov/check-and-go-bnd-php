<?php

namespace App\Services\Implementation;

use App\Models\MenuItem;
use App\Services\BaseService;

class MenuItemTagService extends BaseService
{
    /**
     * @param MenuItem $model
     */
    public function __construct(MenuItem $model)
    {
        parent::__construct($model);
    }
}
