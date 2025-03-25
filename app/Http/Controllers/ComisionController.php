<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComisionRequest;
use App\Models\Comision;
use App\Models\TipComision;
use Illuminate\Http\Request;


class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comision = Comision::with('tipocomision')->get();
        return view('comision.index', compact('comision'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipocomision = TipComision::all();
        return view('comision.create', compact('tipocomision'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComisionRequest $request)
    {
        Comision::create($request->all());
        return redirect()->route('comision.index')->with('success', 'Usuario creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comision $comision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comision $comision)
    {
        $tiposcomision = TipComision::all(); // Obtener todos los tipos de comisión
        return view('comision.edit', compact('comision', 'tiposcomision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comision $comision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comision $comision)
    {
        //
    }
}
