<?php

use App\Http\Controllers\ComisionController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TipComisionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\YearController;
use App\Models\Participante;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/auth/login');
});

// Route::get('/clear', function() {

//    Artisan::call('cache:clear');
//    Artisan::call('config:clear');
//    Artisan::call('config:cache');
//    Artisan::call('view:clear');

//    return "Cleared!";

// });

Route::middleware([
    'auth',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Redirigir dashboard a registro.index
    Route::get('/dashboard', function () {
        return redirect()->route('registro.index');
    })->name('dashboard');

    // Rutas organizadas dentro del middleware (mismo orden que tenías)
    Route::resource('roles', RolesController::class);

    Route::post('participantes/{participante}/registro', [ParticipanteController::class, 'participanteRegistro'])
        ->name('participante.registro.store');

    Route::get('participantes/{participante}/regitro-edit', [ParticipanteController::class, 'partisanteCreate'])
        ->name('participante.registro.create');

    Route::get('participantes/{participante}/regitro-show', [RegistroController::class, 'showparticipante'])
        ->name('participante.registro.show');

    Route::get('participantes/{participante}/regitro-pdf', [RegistroController::class, 'exportpdf'])
        ->name('participante.registro.pdf');

    Route::resource('participantes', ParticipanteController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('comision', ComisionController::class);
    Route::resource('tipocomision', TipComisionController::class);
    Route::resource('evento', EventoController::class);
    Route::resource('registro', RegistroController::class);
});
