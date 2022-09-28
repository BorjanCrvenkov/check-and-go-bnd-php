<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreReservationRequest extends FormRequest
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
    #[ArrayShape(['time_from' => "string", 'time_to' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'time_from' => 'required|date',
            'time_to'   => 'required|date|after:time_from',
            'status'    => 'nullable|integer',
        ];
    }
}
