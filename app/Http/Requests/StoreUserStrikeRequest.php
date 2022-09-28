<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreUserStrikeRequest extends FormRequest
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
    #[ArrayShape(['user_id' => "string", 'strike_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'user_id'   => 'required|integer|exists:users,id',
            'strike_id' => 'required|integer|exists:strikes,id',
            'status'    => 'nullable|integer',
        ];
    }
}
