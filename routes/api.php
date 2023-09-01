<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\LibrosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Inicio de sesión y registro
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Rutas publicas
Route::get('autores', [AutoresController::class, 'list_autores']);
Route::get('autores/{id_autor}', [AutoresController::class, 'view_autor']);
Route::get('generos', [GenerosController::class, 'list_generos']);
Route::get('generos/{id_genero}', [GenerosController::class, 'view_genero']);
Route::get('libros', [LibrosController::class, 'list_libros'])->name('libros.list');
Route::get('libros/{id_libro}', [LibrosController::class, 'view_libro']);

// verificacion por token
Route::middleware('jwt.verify')->group(function(){
    Route::get('users', [UserController::class, 'index'])->middleware('role:1');

    // Roles
    Route::get('roles', [RolesController::class, 'show'])->middleware('role:1');
    Route::get('rol_defecto', [RolesController::class, 'rol_defecto'])->middleware('role:1');

    // Autores
    Route::post('insert_autor', [AutoresController::class, 'insert_autor'])->middleware('role:1,2');
    Route::post('edit_autor', [AutoresController::class, 'edit_autor'])->middleware('role:1,2');
    Route::post('delete_autor', [AutoresController::class, 'delete_autor'])->middleware('role:1,2');

    // Generos
    Route::post('insert_genero', [GenerosController::class, 'insert_genero'])->middleware('role:1,2');
    Route::post('edit_genero', [GenerosController::class, 'edit_genero'])->middleware('role:1,2');
    Route::post('delete_genero', [GenerosController::class, 'delete_genero'])->middleware('role:1,2');

    // Libros
    Route::post('insert_libro', [LibrosController::class, 'insert_libro'])->middleware('role:1,2');
    Route::post('edit_libro', [LibrosController::class, 'edit_libro'])->middleware('role:1,2');
    Route::post('delete_libro', [LibrosController::class, 'delete_libro'])->middleware('role:1,2');
});
