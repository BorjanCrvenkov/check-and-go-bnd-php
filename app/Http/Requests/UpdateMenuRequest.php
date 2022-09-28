<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateMenuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'business_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'name'        => 'nullable|string',
            'business_id' => 'nullable|integer|exists:businesses,id',
            'status'      => 'nullable|integer',
        ];
    }
}
