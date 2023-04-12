<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
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

Route::get("empresas/paginate", [
    \App\Http\Controllers\EmpresaController::class, 'get_paginate'
]);
Route::get("alumnos/paginate", [
    \App\Http\Controllers\AlumnoController::class, 'get_paginate'
]);
Route::get("idiomas/paginate", [
    \App\Http\Controllers\IdiomaController::class, 'get_paginate'
]);

Route::resource('empresas', EmpresaController::class);
Route::resource('productos', ProductoController::class);
Route::resource('alumnos', AlumnoController::class);
Route::resource('idiomas', IdiomaController::class);

Route::view('/', 'main');

//Ruta para las pruebas con Vue
Route::get('/main', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
