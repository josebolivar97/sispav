<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParticipanteRequest;
use App\Http\Requests\StoreRegistroRequest;
use App\Models\Comision;
use App\Models\Evento;
use App\Models\Participante;
use App\Models\Registro;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class ParticipanteController extends Controller
{


    public function index()
    {
        $participante = Participante::with('comision')->get();

        return view('participante.index', compact('participante'));
    }

    public function create()
    {
        $comision = Comision::all();
        return view('participante.create', compact('comision'));
    }

    public function store(StoreParticipanteRequest $request)
    {
        // Crear usuario
        $usuario = User::create([
            'name' => $request->nombres . ' ' . $request->apellido_paterno . ' ' . $request->apellido_materno,
            'email' => $request->email,
            'password' => bcrypt($request->dni),
        ]);



        $usuario->assignRole(3);

        // Agregar el ID del usuario al array del request
        $data = $request->all();
        $data['id_user'] = $usuario->id;

        // Crear participante
        Participante::create($data);

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
        return view('participante.edit', compact('participante', 'comision'));
    }

    public function update(Request $request, Participante $participante)
    {
        $participante->update($request->all());
        return redirect()->route('participantes.index');
    }

    public function destroy(Participante $participante)
    {
        // Eliminar primero el usuario relacionado
        if ($participante->user) {
            $participante->user->delete();
        }

        // Luego eliminar al participante
        $participante->delete();

        return back()->with('eliminar', 'delete');
    }

    public function partisanteCreate(Participante $participante)
    {
        // dd($participante);
        $eventos = Evento::all();
        // dd($eventos);
        return view('registro.create', compact('participante', 'eventos'));
    }

    public function participanteRegistro(Participante $participante, StoreRegistroRequest $request)
    {

        // Obtener todos los datos del request
        $data = $request->all();

        // Asignar el id del participante
        $data['id_participante'] = $participante->id;

        // Subir el archivo PDF si existe
        if ($request->hasFile('pdf_reconocimiento')) {
            // Guardar en la carpeta 'public/pdfs' y obtener el nombre del archivo
            $path = $request->file('pdf_reconocimiento')->store('pdfs', 'public');
            $data['pdf_reconocimiento'] = $path; // Guardamos la ruta en la BD
        }

        // dd($request->all(), $request->file('pdf_reconocimiento'), $request->validated());
        // Crear el registro con los datos modificados
        Registro::create($data);

        return redirect()->route('registro.index')->with('success', 'Registro creado correctamente.');
    }
}
