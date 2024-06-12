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
            'telefon' => 'required|int|min:9|max:11',
            'data_naixement' => 'required|date',
            'email' => 'required|email|max:70|unique:client,email',
        ];
    }
}
