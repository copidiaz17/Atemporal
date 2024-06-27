<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaPrincipalController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
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

Route::get('/', [PaginaPrincipalController::class, "index"]);

Route::get('/Clientes', [ClientesController::class, "index"]);
Route::post('/Clientes/Crear', [ClientesController::class, "crear"]);

Route::get('/Clientes/Login', [ClientesController::class, "ingresar"]);

Route::post('/Clientes/Login', [ClientesController::class, "login"]);


Route::get('/Productos', [ProductosController::class, "index"]);

Route::get('/Productos/Categorias', [ProductosController::class, 'categoria']);

// Route::get('/Productos/Categorias/{categoria}', [ProductosController::class, 'prod_categoria']);

Route::get('/Categorias/{categoria}', [ProductosController::class, 'prod_categoria'])
    ->where('categoria', '.*');

Route::get('/Productos/Crear', [ProductosController::class, "crear"]);
Route::post('/Productos', [ProductosController::class, "store"]);

Route::get('/Productos/{producto}', [ProductosController::class, "mostrar"]);

Route::get('/Productos/{producto}/Editar', [ProductosController::class, "editar"]);

Route::put('/Productos/{producto}', [ProductosController::class, "actualizar"]);



Route::delete('/Productos/{producto}', [ProductosController::class, "eliminar"]);



