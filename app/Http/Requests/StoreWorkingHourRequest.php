<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreWorkingHourRequest extends FormRequest
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
            'day'          => 'required|string',
            'opening_time' => 'required|date',
            'closing_time' => 'required|date',
            'status'       => 'nullable|integer',
        ];
    }
}
