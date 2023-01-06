<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\Producto\StoreProductoRequest;
use App\Http\Requests\Producto\UpdateProductoRequest;
use App\Models\Proveedor;
use App\Models\UnidadMedida;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $productos = Producto::OrderBy('id','asc')->paginate(15);
        // return view('admin.producto.index', compact('productos'));
        $texto = trim($request->get('texto'));
        // $productos = Producto::Where('nombre','LIKE','%'.$texto.'%')->OrderBy('id','asc')->paginate(15);
        $productos = Producto::get();
        return view('admin.producto.index', compact('productos','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidad_medidas = UnidadMedida::get();
        $proveedors = Proveedor::get();
        return view('admin.producto.create', compact('unidad_medidas', 'proveedors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        $unidad_medidas = UnidadMedida::get();
        $proveedors = Proveedor::get();
        return view('admin.producto.show', compact('producto', 'unidad_medidas', 'proveedors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $unidad_medidas = UnidadMedida::get();
        $proveedors = Proveedor::get();
        return view('admin.producto.edit', compact('producto', 'unidad_medidas', 'proveedors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
