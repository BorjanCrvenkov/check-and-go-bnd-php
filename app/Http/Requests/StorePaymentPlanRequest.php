<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StorePaymentPlanRequest extends FormRequest
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
    #[ArrayShape(['name' => "string", 'description' => "string", 'price' => "string", 'payment_frequency_id' => "string", 'status' => "string"])] public function rules(): array
    {
        return [
            'name'                 => 'required|string',
            'description'          => 'required|string',
            'price'                => 'required|integer',
            'payment_frequency_id' => 'required|integer|exists:payment_frequencies,id',
            'status'               => 'nullable|integer',
        ];
    }
}
