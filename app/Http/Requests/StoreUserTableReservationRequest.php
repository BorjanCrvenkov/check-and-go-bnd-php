<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreUserTableReservationRequest extends FormRequest
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
    #[ArrayShape(['user_id' => "string", 'table_id' => "string", 'reservation_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'user_id'        => 'required|integer|exists:users,id',
            'table_id'       => 'required|integer|exists:tables,id',
            'reservation_id' => 'required|integer|exists:reservations,id',
            'status'         => 'nullable|integer',
        ];
    }
}
