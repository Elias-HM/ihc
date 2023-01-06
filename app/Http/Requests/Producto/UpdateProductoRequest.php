<?php

namespace App\Http\Requests\Producto;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
            'nombre' => 'required|string|unique:productos,nombre,' . $this->route('producto')->id . '|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
            'fechaVencimiento' => 'date',
            'codBarras' => 'string|max:30|min:10',
            'idUnidadMedida' => 'required|integer|exists:App\Models\UnidadMedida,id',
            'idProveedor' => 'required|integer|exists:App\Models\Proveedor,id',
            'estado' => 'required|integer|max:8|min:6'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Este campo es requerido',
            'nombre.string' => 'El valor no es correcto',
            'nombre.max' => 'Solo se permite 255 caracteres',

            'precio.required' => 'Este campo es requerido',
            'precio.numeric' => 'El valor ingresado no es correcto',

            'fechaVencimiento.date' => 'La fecha es incorrecta',

            'codBarras.required' => 'Este campo es requerido',
            'codBarras.string' => 'El valor no es correcto',
            'codBarras.max' => 'Solo se permite 30 caracteres',
            'codBarras.min' => 'Ingrese al menos 10 caracteres',

            'estado.required' => 'Este campo es requerido',
            'estado.integer' => 'El valor no es correcto',
            'estado.max' => 'El estado es incorrecto',
            'estado.min' => 'El estado es incorrecto',

            'idUnidadMedida.required' => 'Este campo es requerido',
            'idUnidadMedida.integer' => 'El valor tiene que ser entero',
            'idUnidadMedida.exists' => 'La Unidad de medida no existe',

            'idProveedor.required' => 'Este campo es requerido',
            'idProveedor.integer' => 'El valor tiene que ser entero',
            'idProveedor.exists' => 'El Proveedor no existe',
        ];
    }
}
