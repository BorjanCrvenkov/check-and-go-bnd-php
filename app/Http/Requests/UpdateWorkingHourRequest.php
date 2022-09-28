<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateWorkingHourRequest extends FormRequest
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
    #[ArrayShape(['day' => "string", 'opening_time' => "string", 'closing_time' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'day'          => 'nullable|string',
            'opening_time' => 'nullable|date',
            'closing_time' => 'nullable|date',
            'status'       => 'nullable|integer',
        ];
    }
}
