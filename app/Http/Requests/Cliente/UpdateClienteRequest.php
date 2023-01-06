<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
            'nombre' => 'string|required|max:255',
            'tipoDocumento' => 'string|required|min:3',
            'documento' => 'string|required|min:8|unique:clientes,documento,' . $this->route('cliente')->id . '|max:11',
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:9|min:9',
            'email' => 'string|nullable|unique:clientes,email,' . $this->route('cliente')->id . '|max:255|email:rfc,dns'
        ];
    }

    public function messages()
    {
        return [
            'nombre.string' => 'El campo \'nombre\' no es correcto',
            'nombre.required' => 'El campo \'nombre\' es requerido',
            'nombre.max' => 'El campo \'nombre\' solo permite 255 caracteres',

            'tipoDocumento.string' => 'El campo \'Tipo de Documento\' no es correcto',
            'tipoDocumento.required' => 'El campo \'Tipo de Documento\' es requerido',
            'tipoDocumento.min' => 'El campo \'Tipo de Documento\' requiere de 3 caracteres',

            'documento.string' => 'El campo \'Documento\' no es correcto',
            'documento.required' => 'El campo \'Documento\' es requerido',
            'documento.min' => 'El campo \'Documento\' requiere de 8 caracteres',
            'documento.unique' => 'Este Documento ya se encuentra registrado',
            'documento.max' => 'El campo \'documento\' solo permite 11 caracteres',

            'direccion.string' => 'El campo \'Direccion\' no es correcto',
            'direccion.max' => 'El campo \'Direccion\' solo permite 255 caracteres',

            'telefono.string' => 'El campo \'Telefono\' no es correcto',
            'telefono.max' => 'El campo \'Telefono\' solo permite 9 caracteres',
            'telefono.min' => 'El campo \'Telefono\' requiere de 9 caracteres',

            'email.string' => 'El campo \'Email\' no es correcto',
            'email.unique' => 'Este Email ya se encuentra registrado',
            'email.max' => 'El campo \'Email\' solo permite 255 caracteres',
            'email.email' => 'El campo \'Email\' no es un correo electronico valido',
        ];
    }
}
