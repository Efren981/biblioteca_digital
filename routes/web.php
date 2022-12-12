<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\EditorialesController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\asignaEditorialController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\asignaCategoriaController;
use App\Http\Controllers\asignaAutoresController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::resource("roles",RolController::class);
    Route::resource("usuarios",UsuarioController::class);
    Route::resource("carreras",CarrerasController::class);
    Route::resource("autores",AutoresController::class);
    Route::resource("editoriales",EditorialesController::class);
    Route::resource("libros",LibrosController::class);
    Route::resource("prestamos",PrestamosController::class);
    Route::resource("editoriala",asignaEditorialController::class);
    Route::resource("categorias",CategoriasController::class);
    Route::resource("nuevacategoria",asignaCategoriaController::class);
    Route::resource("nuevoautor",asignaAutoresController::class);

});
