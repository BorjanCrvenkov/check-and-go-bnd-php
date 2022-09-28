<?php

namespace App\Http\Resources\MenuItemTag;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuItemTagResource extends JsonResource
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
            'menu_item_id' => $this->menu_item_id,
            'tag_id'       => $this->tag_id,
            'status'       => $this->status,
            'deleted_at'   => $this->deleted_at,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];
    }
}
