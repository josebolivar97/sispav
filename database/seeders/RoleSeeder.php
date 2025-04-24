<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Crear roles
        $admin = Role::create(['name' => 'Administrador']);
        $usuario = Role::create(['name' => 'Usuario']);

        // Lista de permisos
        $permisos = [
            // Usuarios
            'usuarios.index',
            'usuarios.create',
            'usuarios.edit',
            'usuarios.destroy',

            // Roles
            'roles.index',
            'roles.create',
            'roles.edit',
            'roles.destroy',

            // Participantes
            'participantes.index',
            'participantes.create',
            'participantes.edit',
            'participantes.destroy',

            // Comisiones
            'comision.index',
            'comision.create',
            'comision.edit',
            'comision.destroy',

            // Tipo de Comision
            'tipocomision.index',
            'tipocomision.create',
            'tipocomision.edit',
            'tipocomision.destroy',

            // Eventos
            'evento.index',
            'evento.create',
            'evento.edit',
            'evento.destroy',

            // Registros
            'registro.index',
            'registro.create',
            'registro.edit',
            'registro.destroy',

            // Año
            'year.index',
            'year.create',
            'year.edit',
            'year.destroy',
        ];

        // Crear permisos en base de datos
        foreach ($permisos as $permiso) {
            Permission::firstOrCreate(['name' => $permiso]);
        }

        // Asignar todos los permisos al rol Administrador
        $admin->syncPermissions(Permission::all());

        // Asignar todos menos los destroy al rol Usuario
        $usuario->syncPermissions(
            Permission::where('name', 'not like', '%.destroy')->get()
        );
    }
}
