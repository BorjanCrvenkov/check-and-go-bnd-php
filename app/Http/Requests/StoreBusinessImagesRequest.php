<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreBusinessImagesRequest extends FormRequest
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
    #[ArrayShape(['business_id' => "string", 'image_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'business_id' => 'required|integer|exists:businesses,id',
            'image_id'    => 'required|integer|exists:images,id',
            'status'      => 'nullable|integer',
        ];
    }
}
