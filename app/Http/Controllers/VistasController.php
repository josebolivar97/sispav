<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VistasController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $participante = $user->participante;
    
        // Si no hay participante, devuelve vista con datos vacíos
        if (!$participante) {
            return view('panel.index', [
                'user' => $user,
                'participante' => null,
                'registros' => collect()
            ]);
        }
    
        $registros = $participante->registros;
    
        return view('panel.index', compact('user', 'participante', 'registros'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    // public function showmisdatos(Participante $participante)
    // {
    //     $eventor = Evento::all();
    //     $registro = $participante->registros;

    //     //dd($participante);
    //     return view('uservista.show', compact('participante', 'registro', 'eventor'));
    // }

}
