<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Usuario']);

        /*Usuarios*/
        Permission::create(['name'=>'usuarios.index']);
        Permission::create(['name'=>'usuarios.create']);
        Permission::create(['name'=>'usuarios.edit']);
        Permission::create(['name'=>'usuarios.destroy']);

        /*Roles*/
        Permission::create(['name'=>'roles.index']);
        Permission::create(['name'=>'roles.create']);
        Permission::create(['name'=>'roles.edit']);
        Permission::create(['name'=>'roles.destroy']);

        /*Participantes*/
        Permission::create(['name'=>'participantes.index']);
        Permission::create(['name'=>'participantes.create']);
        Permission::create(['name'=>'participantes.edit']);
        Permission::create(['name'=>'participantes.destroy']);

        /*Comision*/
        Permission::create(['name'=>'comision.index']);
        Permission::create(['name'=>'comision.create']);
        Permission::create(['name'=>'comision.edit']);
        Permission::create(['name'=>'comision.destroy']);

        /*Tipo de Comision*/
        Permission::create(['name'=>'tipocomision.index']);
        Permission::create(['name'=>'tipocomision.create']);
        Permission::create(['name'=>'tipocomision.edit']);
        Permission::create(['name'=>'tipocomision.destroy']);

        /*Evento*/
        Permission::create(['name'=>'evento.index']);
        Permission::create(['name'=>'evento.create']);
        Permission::create(['name'=>'evento.edit']);
        Permission::create(['name'=>'evento.destroy']);

        /*Registro*/
        Permission::create(['name'=>'registro.index']);
        Permission::create(['name'=>'registro.create']);
        Permission::create(['name'=>'registro.edit']);
        Permission::create(['name'=>'registro.destroy']);

    }
}
