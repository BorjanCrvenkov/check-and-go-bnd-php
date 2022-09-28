<?php

namespace App\Http\Resources\BusinessSocialMediaLink;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BusinessSocialMediaLinkCollection extends ResourceCollection
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
