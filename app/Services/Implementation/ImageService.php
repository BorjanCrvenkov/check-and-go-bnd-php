<?php

namespace App\Services\Implementation;

use App\Models\Image;
use App\Services\BaseService;

class ImageService extends BaseService
{
    /**
     * @param Image $model
     */
    public function __construct(Image $model)
    {
        parent::__construct($model);
    }
}
