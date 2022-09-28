<?php

namespace App\Http\Resources\PaymentPlan;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentPlanResource extends JsonResource
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
            'id'                   => $this->id,
            'name'                 => $this->name,
            'description'          => $this->description,
            'price'                => $this->price,
            'payment_frequency_id' => $this->payment_frequency_id,
            'status'               => $this->status,
            'deleted_at'           => $this->deleted_at,
            'created_at'           => $this->created_at,
            'updated_at'           => $this->updated_at,
        ];
    }
}
