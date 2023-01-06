<?php

namespace App\Http\Controllers;

use App\Models\UnidadMedida;
use App\Http\Requests\StoreUnidadMedidaRequest;
use App\Http\Requests\UpdateUnidadMedidaRequest;
use Illuminate\Http\Request;

class UnidadMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $unidadmedidas = UnidadMedida::get();

        $texto = trim($request->get('texto'));
        $unidadmedidas = UnidadMedida::Where('nombre','LIKE','%'.$texto.'%')->OrderBy('id','asc')->paginate(15);
        return view('admin.unidadmedida.index', compact('unidadmedidas','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unidadmedida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUnidadMedidaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnidadMedidaRequest $request)
    {
        UnidadMedida::create($request->all());
        return redirect()->route('admin.unidadmedida.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UnidadMedida  $unidadMedida
     * @return \Illuminate\Http\Response
     */
    public function show(UnidadMedida $unidadMedida)
    {
        return view('admin.unidadmedida.show', compact('unidadMedida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnidadMedida  $unidadMedida
     * @return \Illuminate\Http\Response
     */
    public function edit(UnidadMedida $unidadMedida)
    {
        return view('admin.unidadmedida.show', compact('unidadMedida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUnidadMedidaRequest  $request
     * @param  \App\Models\UnidadMedida  $unidadMedida
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUnidadMedidaRequest $request, UnidadMedida $unidadMedida)
    {
        $unidadMedida->update($request->all());
        return redirect()->route('unidadMedidas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnidadMedida  $unidadMedida
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnidadMedida $unidadMedida)
    {
        $unidadMedida->delete();
        return redirect()->route('unidadMedidas.index');
    }
}
