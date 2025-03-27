<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index()
    {

        $roles=Role::all();

        return view('roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisos=Permission::all();


        return view('roles.create',compact('permisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar datos de entrada
    $request->validate([
        'nombre' => 'required|string|unique:roles,name',
        'permisos' => 'array' // Asegura que sea un array de IDs
    ]);

    // Crear el rol con el nombre recibido
    $role = Role::create(['name' => $request->input('nombre')]);

    // Convertir IDs de permisos a nombres
    $permissions = Permission::whereIn('id', $request->input('permisos'))->pluck('name')->toArray();

    // Asignar permisos al rol
    $role->syncPermissions($permissions);

    return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol=Role::find($id);
        $permisos=Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('roles.edit',compact('rol','permisos','rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        //
        $rol=Role::find($id);
        $rol->name=$request->input('nombre');
        $rol->save();
        
        $rol->syncPermissions($request->input('permisos'));
        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        $rol=Role::find($id)->delete();
        return redirect()->route('roles.index');
    }
}
