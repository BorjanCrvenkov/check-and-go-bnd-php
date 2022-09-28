<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateUserReviewBusinessRequest extends FormRequest
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
    #[ArrayShape(['user_id' => "string", 'review_id' => "string", 'business_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'user_id'     => 'nullable|integer|exists:users,id',
            'review_id'   => 'nullable|integer|exists:reviews,id',
            'business_id' => 'nullable|integer|exists:businesses,id',
            'status'      => 'nullable|integer',
        ];
    }
}
