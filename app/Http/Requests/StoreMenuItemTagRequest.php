<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreMenuItemTagRequest extends FormRequest
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
    #[ArrayShape(['menu_item_id' => "string", 'tag_id' => "string"])] public function rules(): array
    {
        return [
            'menu_item_id' => 'required|integer|exists:menu_items,id',
            'tag_id'       => 'required|integer|exists:tags,id',
        ];
    }
}
