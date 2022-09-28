<?php

namespace App\Services\Implementation;

use App\Models\Event;
use App\Services\BaseService;

class EventService extends BaseService
{
    /**
     * @param Event $model
     */
    public function __construct(Event $model)
    {
        parent::__construct($model);
    }
}
