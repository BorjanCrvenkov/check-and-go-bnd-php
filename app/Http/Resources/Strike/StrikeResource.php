<?php

namespace App\Http\Resources\Strike;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StrikeResource extends JsonResource
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
            'id'             => $this->id,
            'description'    => $this->description,
            'review_id'      => $this->review_id,
            'reservation_id' => $this->reservation_id,
            'status'         => $this->status,
            'deleted_at'     => $this->deleted_at,
            'created_at'     => $this->created_at,
            'updated_at'     => $this->updated_at,
        ];
    }
}
