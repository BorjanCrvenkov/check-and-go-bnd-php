<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'first_name'      => 'nullable|string',
            'last_name'       => 'nullable|string',
            'date_of_birth'   => 'nullable|date',
            'embg'            => 'nullable|string',
            'email'           => 'nullable|email|unique:users,email',
            'password'        => [
                'nullable',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
            ],
            'image_id'        => 'nullable|integer|exists:images,id',
            'role_id'         => 'nullable|integer|exists:roles,id',
            'payment_plan_id' => 'nullable|integer|exists:payment_plans,id',
            'status'          => 'nullable|integer',
        ];
    }
}
