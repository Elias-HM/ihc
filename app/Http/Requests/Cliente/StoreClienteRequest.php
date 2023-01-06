<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'nombre' => 'string|required|max:255|unique:clientes',
            'tipoDocumento' => 'string|required|min:3|max:3',
            'documento' => 'string|required|min:8|unique:clientes|max:11',
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:9|min:9',
            'email' => 'string|nullable|unique:clientes|max:255|email:rfc,dns'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El \'Nombre\' es requerido',
            'nombre.string' => 'El \'Nombre\' ingresado no es valido',
            'nombre.max' => 'El \'Nombre\' solo permite 255 caracteres',
            'nombre.unique' => 'El \'Nombre\' ya se encuentra registrado',

            'tipoDocumento.string' => 'El \'Tipo de Documento\' ingresado no es valido',
            'tipoDocumento.required' => 'El \'Tipo de Documento\' es requerido',
            'tipoDocumento.min' => 'El \'Tipo de Documento\' no es valido',
            'tipoDocumento.max' => 'El \'Tipo de Documento\' no es valido',

            'documento.required' => 'El \'Nro Documento\' es requerido',
            'documento.string' => 'El \'Nro Documento\' ingresado no es valido',
            'documento.max' => 'El \'Nro Documento\' ingresado no es valido',
            'documento.min' => 'El \'Nro Documento\' ingresado no es valido',
            'documento.unique' => 'El \'Nro Documento\' ya se encuentra registrado',

            'direccion.string' => 'La \'Direccion\' ingresada no es valida',
            'direccion.max' => 'La \'Direccion\' solo permite 255 caracteres',

            'telefono.string' => 'La \'Telefono\' ingresada no es valida',
            'telefono.max' => 'El \'Telefono\' debe de contener 9 caracteres',
            'telefono.min' => 'El \'Telefono\' debe de contener 9 caracteres',

            'email.string' => 'El \'Email\' ingresado no es valido',
            'email.email' => 'El \'Email\' ingresado no es un correo electronico valido',
            'email.max' => 'El \'Email\' solo permite 255 caracteres',
            'email.unique' => 'El \'Email\' ya se encuentra registrado',
        ];
    }
}
