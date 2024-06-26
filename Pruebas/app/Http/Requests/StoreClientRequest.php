<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{

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
            'data_naixement' => 'required|date_format:d-m-Y|before_or_equal:01-01-2006',
            'email' => 'required|email|max:70|unique:clients,email',
        ];
    }
}
