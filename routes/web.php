<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentoController;


Route::get('/', [AuthController::class, 'loginFormulario'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/usuario/crear', [AuthController::class, 'crearFormulario'])->name('usuarios.create');
Route::post('/usuario/crear/envio', [UserController::class, 'store'])->name('usuarios.store');

Route::middleware(['auth'])->group(function (){
    Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos.index');
});


Route::get('/home', function() {
    return view('documentos');
})->middleware('auth');

