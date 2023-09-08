<?php

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
Route::resource('libro', \App\Http\Controllers\LibroController::class)->middleware('auth');
Route::resource('categoria', \App\Http\Controllers\CategoriaController::class)->middleware('auth');
/*Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
/*Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.edit');
Route::match(['put'], '/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
*/

Route::put('/libros/{libro}', [LibroController::class, 'update'])->name('libro.edit');
Route::match(['put'], '/libros/{libro}', [CategoriaController::class, 'update'])->name('categorias.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
