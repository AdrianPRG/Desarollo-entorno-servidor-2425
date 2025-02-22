<?php

use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Ruta para listado clientes
Route::get('/clientes',[ClienteController::class, 'index'])->name('clientes.index');
//Ruta para borrar un cliente
Route::delete('/clientes/{id}',[ClienteController::class, 'destroy'])->name('clientes.destroy');
//Ruta para cargar la vista de addicion de un cliente seleccionado
Route::get('/clientes/{id}/edit',[ClienteController::class,'edit'])->name('clientes.edit');
//Ruta para actualizar un cliente seleccionado
Route::put('/clientes/{id}',[ClienteController::class,'update'])->name('clientes.update');
//ruta para cargar la vista de inserccion de cliente
Route::get('/clientes/create',[ClienteController::class,'create'])->name('clientes.create');
//Ruta para insertar el cliente
Route::post('/clientes/store',[ClienteController::class,'insert'])->name('clientes.store');


Route::get('/prueba-factorias', function () {

    $cliente = Cliente::factory()->count(10)->create();    
    $mascota = Mascota::factory()->count(10)->create();

    return response()->json([
        'cliente' => $cliente,
        'mascota' => $mascota
    ]);
});
