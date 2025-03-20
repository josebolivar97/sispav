<?php

use App\Http\Controllers\ComisionController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TipComisionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('roles', RolesController::class);
Route::resource('participantes', ParticipanteController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('comision', ComisionController::class);
Route::resource('tipocomision', TipComisionController::class);
Route::resource('evento', EventoController::class);
Route::resource('registro', RegistroController::class);
