<?php

namespace App\Http\Resources\BusinessWorkingHour;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusinessWorkingHourResource extends JsonResource
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
            'id'              => $this->id,
            'business_id'     => $this->business_id,
            'working_hour_id' => $this->working_hour_id,
            'status'          => $this->status,
            'deleted_at'      => $this->deleted_at,
            'created_at'      => $this->created_at,
            'updated_at'      => $this->updated_at,
        ];
    }
}
