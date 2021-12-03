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
    return view('Medilab.index');
});
Route::get('/index', function () {
    return view('welcome');
});
Auth::routes();

route::group(['middleware'=>'auth'], function(){

    Route::get('servicios/pdf',  [App\Http\Controllers\ServicioController::class,'pdf' ])->name('servicios.pdf');


    Route::resource('users', \App\Http\Controllers\UserController::class);
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



    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('permissions', App\Http\Controllers\permissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
});



