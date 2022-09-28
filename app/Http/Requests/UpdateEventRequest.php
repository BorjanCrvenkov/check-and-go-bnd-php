<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateEventRequest extends FormRequest
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
    #[ArrayShape(['name' => "string", 'description' => "string", 'start_time' => "string", 'end_time' => "string", 'business_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'name'        => 'nullable|string',
            'description' => 'nullable|string',
            'start_time'  => 'nullable|date',
            'end_time'    => 'nullable|date|after:start_time',
            'business_id' => 'nullable|integer|exists:businesses,id',
            'status'      => 'nullable|integer',
        ];
    }
}
