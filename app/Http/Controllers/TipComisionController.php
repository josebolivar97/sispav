<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipComisionRequest;
use App\Models\TipComision;
use Illuminate\Http\Request;

class TipComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipcomisi = TipComision::all();
        return view('tipocomision.index', compact('tipcomisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipocomision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipComisionRequest $request)
    {
        TipComision::create($request->all());

        return redirect()->route('tipocomision.index')->with('success', 'Usuario creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipComision $tipocomision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipComision $tipocomision)
    {
        // dd($tipocomision);
        return view('tipocomision.edit', compact('tipocomision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipComision $tipocomision)
    {
        $tipocomision->update($request->all());
        return redirect()->route('tipocomision.index')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipComision $tipocomision)
    {
        $tipocomision->delete();

        return back()->with('eliminar', 'delete');
    }
}
