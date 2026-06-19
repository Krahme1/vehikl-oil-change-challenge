<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOilChangeCheckRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'previous_odometer' => ['required', 'integer', 'min:0'],
            'current_odometer' => ['required', 'integer', 'min:0', 'gte:previous_odometer'],
            'previous_oil_change_date' => ['required', 'date', 'before:today'],
        ];
    }

    public function messages(): array
    {
        return [
            'current_odometer.gte' => 'Current odometer must be greater than or equal to the odometer at the previous oil change.',
            'previous_oil_change_date.before' => 'Date of previous oil change must be in the past.',
        ];
    }
}