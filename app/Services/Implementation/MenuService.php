<?php

namespace App\Services\Implementation;

use App\Models\Menu;
use App\Services\BaseService;

class MenuService extends BaseService
{
    /**
     * @param Menu $model
     */
    public function __construct(Menu $model)
    {
        parent::__construct($model);
    }
}
