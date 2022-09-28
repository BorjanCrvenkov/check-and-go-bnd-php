<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreBusinessSocialMediaLinkRequest extends FormRequest
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
    #[ArrayShape(['business_id' => "string", 'social_media_link' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'business_id'       => 'required|integer|exists:businesses,id',
            'social_media_link' => 'required|string',
            'status'            => 'nullable|integer',
        ];
    }
}
