<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable','string', 'max:20'],
            'price' => ['nullable', 'array'],
            'price.*' => ['nullable', 'integer', 'min:0', 'max:1000000'],
            'bedrooms' => ['nullable', 'integer', 'min:3', 'max:5'],
            'bathrooms' => ['nullable', 'integer', 'min:2', 'max:3'],
            'storeys' => ['nullable', 'integer', 'min:1', 'max:2'],
            'garages' => ['nullable', 'integer', 'min:1', 'max:3'],
        ];
    }
}
