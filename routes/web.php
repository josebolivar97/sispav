<?php

use App\Http\Controllers\ComisionController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TipComisionController;
use App\Http\Controllers\VistasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\YearController;
use App\Models\Participante;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middleware\RoleMiddleware;

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

    Route::get('/dashboard', function () {
        return redirect()->route('panel');
    })->name('dashboard');

    Route::get('/panel', [VistasController::class, 'index'])->name('panel');

    // 🔒 Solo Administrador puede acceder a todo
    Route::middleware('role:Administrador')->group(function () {
        Route::resource('roles', RolesController::class);
        Route::resource('usuarios', UsuarioController::class);
    });

    // 🔒 Administrador y Usuario (excepto destroy)
    Route::middleware('role:Administrador|Usuario')->group(function () {
        Route::resource('participantes', ParticipanteController::class)->except(['destroy']);
        Route::resource('comision', ComisionController::class);
        Route::resource('tipocomision', TipComisionController::class);
        Route::resource('evento', EventoController::class);
        Route::resource('registro', RegistroController::class);

        Route::post('participantes/{participante}/registro', [ParticipanteController::class, 'participanteRegistro'])
            ->name('participante.registro.store');

        Route::get('participantes/{participante}/regitro-edit', [ParticipanteController::class, 'partisanteCreate'])
            ->name('participante.registro.create');

        Route::get('participantes/{participante}/regitro-show', [RegistroController::class, 'showparticipante'])
            ->name('participante.registro.show');

        Route::get('participantes/{participante}/regitro-pdf', [RegistroController::class, 'exportpdf'])
            ->name('participante.registro.pdf');
    });

    // 🔒 Solo Administrador puede eliminar participantes
    Route::delete('participantes/{participante}', [ParticipanteController::class, 'destroy'])
        ->middleware('role:Administrador')
        ->name('participantes.destroy');
});

// Route::group(['middleware' => [RoleMiddleware::using(['Administrador', 'Participante'])]], function () {
//     Route::resource('usuarios', UsuarioController::class);
// });
