<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistroRequest;
use App\Models\Evento;
use App\Models\Participante;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participante = Participante::all();
        return view('registro.index', compact('participante'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $evento = Evento::all();
        return view('registro.create', compact('evento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistroRequest $request)
    {
        Registro::create($request->all());

        return view('registro.index', compact('participantes', 'eventos'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
