<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Http\Requests\StoreVentaRequest;
use App\Http\Requests\UpdateVentaRequest;
use App\Models\Cliente;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::get();
        return view('admin.venta.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::get();
        return view('admin.venta.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVentaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVentaRequest $request)
    {
        $venta = Venta::create($request->all());
        /*
        'idVenta',
        'idProducto',
        'cantidad',
        'precio',
        'descuento',
        'importe'
*/
        foreach ($request->id as $key => $sos) {
            $results[] = array("idProducto" => $request->idProducto[$key], "cantidad" => $request->cantidad[$key], "costo" => $request->costo[$key], "importe" => $request->importe[$key]);
        }
        $venta->detalleVentas()->createMany($results);
        return redirect()->route('venta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        return view('admin.venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        $clientes = Cliente::get();
        return view('admin.venta.show', compact('venta', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVentaRequest  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVentaRequest $request, Venta $venta)
    {
        // $venta->update($request->all());
        // return redirect()->route('venta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        // $venta->delete();
        // return redirect()->route('venta.index');
    }
}