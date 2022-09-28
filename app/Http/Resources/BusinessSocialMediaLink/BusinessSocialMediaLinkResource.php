<?php

namespace App\Http\Resources\BusinessSocialMediaLink;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusinessSocialMediaLinkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'                => $this->id,
            'business_id'       => $this->business_id,
            'social_media_link' => $this->social_media_link,
            'status'            => $this->status,
            'deleted_at'        => $this->deleted_at,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
        ];
    }
}
