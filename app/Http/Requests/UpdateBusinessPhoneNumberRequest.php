<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateBusinessPhoneNumberRequest extends FormRequest
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
    #[ArrayShape(['business_id' => "string", 'phone_number' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'business_id'  => 'nullable|integer|exists:businesses,id',
            'phone_number' => 'nullable|string',
            'status'       => 'nullable|integer',
        ];
    }
}
