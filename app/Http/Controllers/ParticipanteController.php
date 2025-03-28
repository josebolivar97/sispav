<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParticipanteRequest;
use App\Http\Requests\StoreRegistroRequest;
use App\Models\Comision;
use App\Models\Evento;
use App\Models\Participante;
use App\Models\Registro;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class ParticipanteController extends Controller
{

    public function index()
    {
        $participante = Participante::with('comision')->get();

        return view('Participante.index', compact('participante'));
    }

    public function create()
    {
        $comision = Comision::all();
        return view('participante.create', compact('comision'));
    }

    public function store(StoreParticipanteRequest $request)
    {
        Participante::create($request->all());

        return redirect()->route('participantes.index')->with('success', 'Usuario creado correctamente.');
    }

    public function show(Participante $participante)
    {
        // dd($participante);
        return view('participante.show', compact('participante'));
    }

    public function edit(Participante $participante)
    {
        $comision = Comision::all();
        return view('participante.edit', compact('participante','comision'));
    }

    public function update(Request $request, Participante $participante)
    {
        $participante->update($request->all());
        return redirect()->route('participantes.index');
    }

    public function destroy(Participante $participante)
    {
        $participante->delete();

        return back()->with('eliminar', 'delete');
    }

    public function partisanteVista(Participante $participante)
    {
        // dd($participante);
        $eventos = Evento::all();
        // dd($eventos);
        return view('registro.create', compact('participante', 'eventos'));
    }

    public function particianteRegistro(Participante $participante, StoreRegistroRequest $request)
    {
        // dd($request->institucion);

        // Registro::create([
        //     'institucion' => $request->institucion,
        //     'nom_reconocimiento' => $request->nom_reconocimiento,
        //     'id_participante' => $participante->id,
        //     'id_evento' => $request->id_evento,
        // ]);
        Registro::create([
            ...$request->all(),
            'id_participante' => $participante->id,
        ]);



        // $array = $request;
        // $array


        return redirect()->route('registro.index')->with('success', 'Registro creado correctamente.');
    }
}
