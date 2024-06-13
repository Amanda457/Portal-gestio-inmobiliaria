<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClientRequest extends FormRequest
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
            'nom' => 'required|string|min:2',
            'cognom' => 'required|string|min:2',
            'telefon' => 'required|int|digits_between:9,11',
            'data_naixement' => 'required|date',
            'email' => [
                'required', 
                'email', 
                'max:70', 
                Rule::unique('clients')->ignore($this->route('client')),
            ],
        ];
    }
}
