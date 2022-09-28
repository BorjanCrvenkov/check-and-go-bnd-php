<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreEventRequest extends FormRequest
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
            'name'        => 'required|string',
            'description' => 'required|string',
            'start_time'  => 'required|date',
            'end_time'    => 'required|date|after:start_time',
            'business_id' => 'required|integer|exists:businesses,id',
            'status'      => 'nullable|integer',
        ];
    }
}
