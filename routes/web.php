<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\AuthController;

// Página de inicio
Route::get('/', [ServicioController::class, 'index'])->name('home');

// Sección de Servicios
Route::get('/servicios', [ServicioController::class, 'servicios'])->name('servicios');

// Página de Contacto
Route::get('/contacto', [ServicioController::class, 'contacto'])->name('contacto');

// Secciones de Servicios Específicos
Route::get('/frenos', function () {
    return view('frenos');
})->name('frenos');

Route::get('/mantenimiento', function () {
    return view('mantenimiento');
})->name('mantenimiento');

Route::get('/motor', function () {
    return view('motor');
})->name('motor');

Route::get('/aireacondicionado', function () {
    return view('aireacon');
})->name('aireacon');

// Autenticación (Login y Registro)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
