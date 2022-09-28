<?php

namespace App\Services\Implementation;

use App\Models\Table;
use App\Services\BaseService;

class TableService extends BaseService
{
    /**
     * @param Table $model
     */
    public function __construct(Table $model)
    {
        parent::__construct($model);
    }
}
