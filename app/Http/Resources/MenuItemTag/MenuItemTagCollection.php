<?php

namespace App\Http\Resources\MenuItemTag;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MenuItemTagCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return $this->collection->toArray();
    }
}