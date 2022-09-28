<?php

namespace App\Http\Resources\UserStrike;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserStrikeResource extends JsonResource
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
            'id'         => $this->id,
            'user_id'    => $this->user_id,
            'strike_id'  => $this->strike_id,
            'status'     => $this->status,
            'deleted_at' => $this->deleted_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
