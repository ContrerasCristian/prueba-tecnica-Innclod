<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\TipoDocController;


Route::get('/', [AuthController::class, 'loginFormulario'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/usuario/crear', [AuthController::class, 'crearFormulario'])->name('usuarios.create');
Route::post('/usuario/crear/envio', [UserController::class, 'store'])->name('usuarios.store');

Route::get('/home', function() {
    return view('documentos');
})->middleware('auth');

Route::middleware(['auth'])->group(function (){
    Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos.index');
    Route::get('/procesos', [ProcesoController::class, 'index'])->name('procesos.index');
    Route::get('/tipos', [TipoDocController::class, 'index'])->name('tipos.index');
    Route::get('/crearProceso', [ProcesoController::class, 'create'])->name('formularioProcesos');
    Route::post('/crearProceso', [ProcesoController::class, 'store'])->name('crearProceso');
    Route::get('/proceso/{id}', [ProcesoController::class, 'show'])->name('obtener-proceso');
    Route::patch('/proceso/{id}', [ProcesoController::class, 'update'])->name('proceso-actualizar');
    Route::delete('/proceso/{id}', [ProcesoController::class, 'destroy'])->name('proceso-eliminar');
    Route::resource('tipo', TipoDocController::class);
    Route::resource('documento', DocumentoController::class);
});




