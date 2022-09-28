<?php

namespace App\Services\Implementation;

use App\Models\UserFavouriteBusiness;
use App\Services\BaseService;

class UserFavouriteBusinessService extends BaseService
{
    /**
     * @param UserFavouriteBusiness $model
     */
    public function __construct(UserFavouriteBusiness $model)
    {
        parent::__construct($model);
    }
}
