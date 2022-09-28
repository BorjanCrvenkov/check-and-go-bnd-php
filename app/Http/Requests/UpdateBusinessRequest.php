<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\ArrayShape;

class UpdateBusinessRequest extends FormRequest
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
        $user = Auth::user();

        if ($user->is_admin) {
            return $this->adminRules();
        } else if ($user->is_business) {
            return $this->businessRules();
        }

        return [];
    }

    /**
     * @return string[]
     */
    #[ArrayShape(['name' => "string", 'address' => "string", 'discount' => "string", 'owner_id' => "string", 'status' => "string"])] private function adminRules(): array
    {
        return [
            'name'     => 'nullable|string',
            'address'  => 'nullable|string',
            'discount' => 'nullable|integer',
            'owner_id' => 'nullable|integer|exists:users,id',
            'status'   => 'nullable|integer',
        ];
    }

    /**
     * @return string[]
     */
    #[ArrayShape(['name' => "string", 'address' => "string", 'discount' => "string", 'status' => "string"])] private function businessRules(): array
    {
        return [
            'name'     => 'nullable|string',
            'address'  => 'nullable|string',
            'discount' => 'nullable|integer',
            'status'   => 'nullable|integer',
        ];
    }
}
