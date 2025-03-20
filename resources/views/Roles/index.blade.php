@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Roles</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">


            <a class="btn btn-info mb-3" href="{{ route('roles.create') }}">Registro Roles</a>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>Nombre</th>
                            <th>Permiso</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $rol)
                            @if ($rol->id != 1)
                                <tr>
                                    <td>{{ $rol->name }}</td>
                                    <td>
                                        @foreach ($rol->permissions as $permiso)
                                            <span class="badge badge-pill badge-dark">{{ $permiso->name }}</span>
                                        @endforeach
                                    </td>
                                    <td width="140px">
                                        <a href="{{ route('roles.edit', $rol->id) }}"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                                        <form action="{{ route('roles.destroy', $rol->id) }}" method="post"
                                            class="d-inline"> @csrf @method('delete') <button type="submit"
                                                class="btn btn-outline-danger btn-sm"><i
                                                    class="fas fa-lg fa-trash"></i></button></form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
