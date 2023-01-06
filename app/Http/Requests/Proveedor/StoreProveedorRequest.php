<?php

namespace App\Http\Requests\Proveedor;

use Illuminate\Foundation\Http\FormRequest;

class StoreProveedorRequest extends FormRequest
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
            'nombre' => 'required|string|max:255|unique:proveedors',
            'documento' => 'required|string|min:11|unique:proveedors|max:11',
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|min:9|unique:proveedors|max:9',
            'email' => 'nullable|string|unique:proveedors|max:255|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El \'Nombre\' es requerido',
            'nombre.string' => 'El \'Nombre\' ingresado no es valido',
            'nombre.max' => 'El \'Nombre\' solo permite 255 caracteres',
            'nombre.unique' => 'El \'Nombre\' ya se encuentra registrado',

            'documento.required' => 'El \'RUC\' es requerido',
            'documento.string' => 'El \'RUC\' ingresado no es valido',
            'documento.max' => 'El \'RUC\' debe de contener 11 caracteres',
            'documento.min' => 'El \'RUC\' debe de contener 11 caracteres',
            'documento.unique' => 'El \'RUC\' ya se encuentra registrado',

            'direccion.string' => 'La \'Direccion\' ingresada no es valida',
            'direccion.max' => 'La \'Direccion\' solo permite 255 caracteres',

            'telefono.string' => 'La \'Telefono\' ingresada no es valida',
            'telefono.max' => 'El \'Telefono\' debe de contener 9 caracteres',
            'telefono.min' => 'El \'Telefono\' debe de contener 9 caracteres',
            'telefono.unique' => 'El \'Telefono\' ya se encuentra registrado',

            'email.string' => 'El \'Email\' ingresado no es valido',
            'email.email' => 'El \'Email\' ingresado no es un correo electronico valido',
            'email.max' => 'El \'Email\' solo permite 255 caracteres',
            'email.unique' => 'El \'Email\' ya se encuentra registrado',
        ];
    }
}
