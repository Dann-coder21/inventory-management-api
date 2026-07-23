<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'name' => [
                'sometimes',
                'string',
                'max:255'
            ],

            'description' => [
                'nullable',
                'string'
            ],

            'price' => [
                'sometimes',
                'numeric',
                'min:0'
            ],

            'quantity' => [
                'sometimes',
                'integer',
                'min:0'
            ],

            'category_id' => [
                'sometimes',
                'exists:categories,id'
            ],

            'is_active' => [
                'sometimes',
                'boolean'
            ],

        ];
    }
}
