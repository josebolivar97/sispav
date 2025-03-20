<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParticipanteRequest;
use App\Models\Participante;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class ParticipanteController extends Controller
{

    public function index()
    {
        $participante = Participante::all();

        return view('Participante.index', compact('participante'));
    }

    public function create()
    {
        return view('participante.create');
    }

    public function store(StoreParticipanteRequest $request)
    {
        Participante::create($request->all());

        return redirect()->route('participantes.index');
    }

    public function show(Participante $participante)
    {

        return view('participante.show', compact('participante'));
    }

    public function edit(Participante $participante)
    {
        return view('participante.edit', compact('participante'));
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
}
