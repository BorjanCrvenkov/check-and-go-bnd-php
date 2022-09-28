<?php

namespace App\Services\Implementation;

use App\Models\Role;
use App\Services\BaseService;

class RoleService extends BaseService
{
    /**
     * @param Role $model
     */
    public function __construct(Role $model)
    {
        parent::__construct($model);
    }
}
