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

        $roles = Role::all();

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisos = Permission::all();


        return view('roles.create', compact('permisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|unique:roles,name',
        ]);

        $role = Role::create(['name' => $request->input('nombre')]);

        $nombresPermisos = Permission::whereIn('id', $request->input('permisos'))->pluck('name')->toArray();

        $role->syncPermissions($nombresPermisos);

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
        $rol = Role::find($id);
        $permisos = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('roles.edit', compact('rol', 'permisos', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $rol = Role::findOrFail($id);
        $rol->name = $request->input('nombre');
        $rol->save();

        $nombresPermisos = Permission::whereIn('id', $request->input('permisos'))->pluck('name')->toArray();

        $rol->syncPermissions($nombresPermisos);

        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        $rol = Role::find($id)->delete();
        return redirect()->route('roles.index');
    }
}
