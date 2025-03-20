@extends('adminlte::page')

@section('title', 'Participantes')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Informacion del Participante</h1>
@stop

@section('content')
    <a class="btn btn-info mb-3" href="{{ route('participantes.create') }}">Registrar Participante</a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>id</th>
                            <th>DNI</th>
                            <th>Nombres</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Lugar de Nacimiento</th>
                            <th>Comisión</th>
                            <th>Profesión</th>
                            <th>Lugar de Residencia</th>
                            <th>Nombre de Organizacion</th>
                            <th>Celular</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $participante->id }}</td>
                            <td>{{ $participante->dni }}</td>
                            <td>{{ $participante->nombres }}</td>
                            <td>{{ $participante->apellido_paterno }}</td>
                            <td>{{ $participante->apellido_materno }}</td>
                            <td>{{ $participante->f_nacimiento }}</td>
                            <td>{{ $participante->l_nacimiento }}</td>
                            <td>{{ $participante->comision }}</td>
                            <td>{{ $participante->profesion }}</td>
                            <td>{{ $participante->l_residencia }}</td>
                            <td>{{ $participante->organizacion }}</td>
                            <td>{{ $participante->celular }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package! helooo");
    </script>
@stop
