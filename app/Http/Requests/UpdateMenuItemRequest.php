<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateMenuItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'description' => "string", 'price' => "string", 'image_id' => "string", 'menu_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'name'        => 'nullable|string',
            'description' => 'nullable|string',
            'price'       => 'nullable|integer',
            'image_id'    => 'nullable|integer|exists:images,id',
            'menu_id'     => 'nullable|integer|exists:menus,id',
            'status'      => 'nullable|integer',
        ];
    }
}
