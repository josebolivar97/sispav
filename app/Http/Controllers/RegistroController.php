<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistroRequest;
use App\Models\Evento;
use App\Models\Participante;
use App\Models\Registro;
use Barryvdh\DomPDF\Facade\Pdf;
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
        // $participante = Participante::all();
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
        // $participante= Participante::all();
        // $registro= Registro::all();
        // $eventor= Evento::all();
        // // dd($participante);
        // return view('registro.show', compact('participante', 'registro', 'eventor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participante $registro)
    {
        //

        dd($registro);
        return view('registro.create');
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

    public function showparticipante(Participante $participante)
    {
        $eventor = Evento::all();
        $registro = $participante->registros;

        //dd($participante);
        return view('registro.show', compact('participante', 'registro', 'eventor'));
    }

    public function exportpdf(Participante $participante)
    {
        // $eventor = Evento::all(); // si lo usas en la vista
        $registro = $participante->registros; // relación con registros

        $pdf = Pdf::loadView('registro.reportpdf', compact('participante', 'registro'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('participante_' . $participante->dni . '.pdf');
    }
}
