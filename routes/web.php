<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('roles',App\Http\Controllers\RolController::class)->middleware('auth')->middleware('can:ver-rol');
Route::resource('usuarios',App\Http\Controllers\UsuarioController::class)->middleware('auth')->middleware('can:ver-usuario');
Route::resource('catinsumos',App\Http\Controllers\CatinsumoController::class)->middleware('auth');
Route::resource('catproductos',App\Http\Controllers\CatproductoController::class)->middleware('auth');
Route::resource('unidadmedidas',App\Http\Controllers\UnidadmedidaController::class)->middleware('auth');
Route::resource('insumos',App\Http\Controllers\InsumoController::class)->middleware('auth');
Route::resource('recetas',App\Http\Controllers\RecetaController::class)->middleware('auth');
Route::resource('productos',App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('compras',App\Http\Controllers\CompraController::class)->middleware('auth');
Route::resource('clientes',App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('ventas',App\Http\Controllers\VentaController::class)->middleware('auth');
