<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUnidadMedidaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:50',
            'abreviatura' => 'required|string|max:3',
            'estado' => 'required|integer|max:8|min:6'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Este campo es requerido',
            'nombre.string' => 'El valor no es correcto',
            'nombre.max' => 'Solo se permite 50 caracteres',
            'abreviatura.required' => 'Este campo es requerido',
            'abreviatura.string' => 'El valor no es correcto',
            'abreviatura.max' => 'Solo se permite 3 caracteres',
            'estado.required' => 'Este campo es requerido',
            'estado.integer' => 'El valor no es correcto',
            'estado.max' => 'Solo se permite 8 caracteres',
            'estado.min' => 'Se requiere de 6 caracteres',
        ];
    }
}
