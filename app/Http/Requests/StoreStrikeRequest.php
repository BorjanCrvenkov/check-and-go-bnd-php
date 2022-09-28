<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreStrikeRequest extends FormRequest
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
    #[ArrayShape(['description' => "string", 'review_id' => "string", 'reservation_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'description'    => 'required|string',
            'review_id'      => 'nullable|integer|exists:reviews,id',
            'reservation_id' => 'nullable|integer|exists:reservations,id',
            'status'         => 'nullable|integer',
        ];
    }
}
