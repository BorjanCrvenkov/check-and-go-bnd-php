<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateTableRequest extends FormRequest
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
    #[ArrayShape(['name' => "string", 'number_of_seats' => "string", 'business_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'name'            => 'nullable|string',
            'number_of_seats' => 'nullable|integer',
            'business_id'     => 'nullable|integer|exists:businesses,id',
            'status'          => 'nullable|integer',
        ];
    }
}
