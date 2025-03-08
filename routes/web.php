<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GraficasController; // Asegúrate de importar el controlador
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', function () {
    return view('dashboard');
});

// Ruta del dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas de perfil (protegidas por autenticación)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Nueva ruta para mostrar el formulario de selección de gráficas
    Route::get('/seleccion-graficas', [GraficasController::class, 'mostrarFormularioGraficas'])
        ->name('seleccion.graficas');

    // Nueva ruta para procesar la selección de gráficas
    Route::post('/procesar-seleccion-graficas', [GraficasController::class, 'procesarSeleccionGraficas'])
        ->name('procesar.seleccion.graficas');
});

// Rutas de autenticación (registro, inicio de sesión, etc.)
require __DIR__.'/auth.php';
