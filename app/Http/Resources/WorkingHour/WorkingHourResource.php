<?php

namespace App\Http\Resources\WorkingHour;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkingHourResource extends JsonResource
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
            'id'           => $this->id,
            'day'          => $this->day,
            'opening_time' => $this->opening_time,
            'closing_time' => $this->closing_time,
            'status'       => $this->status,
            'deleted_at'   => $this->deleted_at,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];
    }
}
