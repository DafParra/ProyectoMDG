<?php

use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TipoServicioController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('servicios/pdf',  [App\Http\Controllers\ServicioController::class,'pdf' ])->name('servicios.pdf'); 


Route::resource('usuarios', \App\Http\Controllers\UsuarioController::class);
Route::get('plantillas', function (){
    return view('plantillas.master');
});

Route::resource('servicios', App\Http\Controllers\ServicioController::class);
Route::get('plantillas', function (){
    return view('plantillas.master');
});



Route::get('servicios/{servicio}/habilitar' ,
    [
        App\Http\Controllers\ServicioController::class,'habilitar'
    ]
)->name('servicios.habilitar');


Route::resource('tiposervicios', App\Http\Controllers\TipoServicioController::class);
Route::get('plantillas', function (){
    return view('plantillas.master');
});
Route::delete('tiposervicios/{tiposervicio}', [TipoServicioController::class,'destroy'])->name('tiposervicios.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

