<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
            'first_name'      => 'required|string',
            'last_name'       => 'required|string',
            'date_of_birth'   => 'required|date',
            'embg'            => 'required|string',
            'email'           => 'required|email|unique:users,email',
            'password'        => [
                'required',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
            ],
            'image_id'        => 'nullable|integer|exists:images,id',
            'role_id'         => 'required|integer|exists:roles,id',
            'payment_plan_id' => 'required|integer|exists:payment_plans,id',
            'status'          => 'nullable|integer',
        ];
    }
}
