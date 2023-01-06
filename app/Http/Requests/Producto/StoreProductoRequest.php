<?php

namespace App\Http\Requests\Producto;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
            'nombre' => 'required|string|unique:productos|max:255',
            'stock' => 'required|numeric',
            'precio' => 'required|numeric',
            // 'fechaVencimiento' => 'nullable|date',
            'codBarras' => 'nullable|numeric|max:13|min:11',
            'idUnidadMedida' => 'required|integer|exists:App\Models\UnidadMedida,id',
            'idProveedor' => 'required|integer|exists:App\Models\Proveedor,id',
            'estado' => 'nullable|string|max:9'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El \'Nombre\' es requerido',
            'nombre.string' => 'El \'Nombre\' ingresado no es valido',
            'nombre.max' => 'El \'Nombre\' solo permite 255 caracteres',
            'nombre.unique' => 'El \'Nombre\' ya se encuentra registrado',

            'stock.required' => 'El \'Stock\' es requerido',
            'stock.numeric' => 'El \'Stock\' ingresado no es valido',

            'precio.required' => 'El \'Precio\' es requerido',
            'precio.numeric' => 'El \'Precio\' ingresado no es valido',

            // 'fechaVencimiento.date' => 'La fecha es incorrecta',

            'codBarras.numeric' => 'El \'Codigo de Barras\' ingresado no es valido',
            'codBarras.max' => 'La longitud del \'Codigo de Barras\' ingresado no es valido',
            'codBarras.min' => 'La longitud del \'Codigo de Barras\' ingresado no es valido',

            'estado.string' => 'El \'Estado\' ingresado no es valido',
            'estado.max' => 'El \'Estado\' ingresado no es valido',

            'idUnidadMedida.required' => 'La \'Unidad de Medida\' es requerido',
            'idUnidadMedida.integer' => 'La \'Unidad de Medida\' ingresado no es valido',
            'idUnidadMedida.exists' => 'La \'Unidad de Medida\' no existe',

            'idProveedor.required' => 'El \'Proveedor\' es requerido',
            'idProveedor.integer' => 'El \'Proveedor\' ingresado no es valido',
            'idProveedor.exists' => 'El \'Proveedor\' no existe',
        ];
    }
}
