<?php

use App\Http\Controllers\FrontEdnController;
use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home FrontEnd
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

// Libros por etiqueta
Route::get('libros/etiqueta/{tag}', [HomeController::class, 'libros_etiqueta'])->name('frontend.libros_etiqueta');

// pruebas
Route::get('pruebas', [HomeController::class, 'pruebas'])->name('frontend.pruebas');
