<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePisRequest extends FormRequest
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
            'nom_referencia' => 'required|string|min:3|max:50',
            'tipus' => ['required', 'string', 'in:Pis,Casa'],
            'direccio' => 'required|string|min:3|max:70',
            'poblacio' => 'required|string|min:3|max:30',
            'm2' => 'required|integer|between:30,999',
            'habitacions' => 'required|integer|between:1,12',
            'lavabos' => 'required|integer|between:1,12',
            'preu' => 'required|integer|between:300,2000',
            'tipus_cuina' => ['required', 'string', 'in:Americana,Oberta (sense barra/illa),Independent'],
            'estat' => ['required', 'string', 'in:Per reformar,Per entrar a viure,Nou'],
            'descripcio' => 'required|string|min:40',
            'ascensor' => 'required|boolean',
        ];
    }
}
