<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnidadMedidaController;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('/prueba2', function () {
    return view('prueba2');
});
Route::get('/nosotros', function () {
    return view('extras/nosotros');
});

//Route::resource('clientes', 'ClienteController')->names('clientes');
Route::resource('clientes', ClienteController::class)->names('clientes');
//para cuando el parametro en singular es distinto al que se recibe en el controlador
Route::resource('proveedores', ProveedorController::class)->names('proveedores')->parameters(['proveedores' => 'proveedor']);
Route::resource('productos', ProductoController::class)->names('productos');
Route::resource('ventas', VentaController::class)->names('ventas');
Route::resource('unidadMedidas', UnidadMedidaController::class)->names('unidadMedidas');
