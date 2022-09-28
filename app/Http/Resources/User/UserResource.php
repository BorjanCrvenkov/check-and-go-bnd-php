<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'first_name'      => $this->first_name,
            'last_name'       => $this->last_name,
            'date_of_birth'   => $this->date_of_birth,
            'embg'            => $this->embg,
            'email'           => $this->email,
            'password'        => $this->password,
            'image_id'        => $this->image_id,
            'role_id'         => $this->role_id,
            'payment_plan_id' => $this->payment_plan_id,
            'status'          => $this->status,
            'deleted_at'      => $this->deleted_at,
            'created_at'      => $this->created_at,
            'updated_at'      => $this->updated_at,
        ];
    }
}
