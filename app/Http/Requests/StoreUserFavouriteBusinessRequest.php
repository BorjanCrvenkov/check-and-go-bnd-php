<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreUserFavouriteBusinessRequest extends FormRequest
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
    #[ArrayShape(['user_id' => "string", 'business_id' => "string"])] public function rules(): array
    {
        return [
            'user_id'     => 'required|integer|exists:users,id',
            'business_id' => 'required|integer|exists:businesses,id',
        ];
    }
}
