<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreBusinessWorkingHoursRequest extends FormRequest
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
    #[ArrayShape(['business_id' => "string", 'working_hours_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'business_id'      => 'required|integer|exists:businesses,id',
            'working_hours_id' => 'required|integer|exists:working_hours,id',
            'status'           => 'nullable|integer',
        ];
    }
}
