@extends('adminlte::page')

@section('title', 'Participantes')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Evento</h1>
@stop

@section('content')
    <a class="btn btn-info mb-3" href="{{ route('evento.create') }}">Registrar Evento</a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>Nombre de Evento</th>
                            <th>Lugar</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Finalización</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($evento as $part)
                            <tr>
                                <td>{{ $part->nom_evento }}</td>
                                <td>{{ $part->lugar }}</td>
                                <td>{{ $part->fech_aperturra }}</td>
                                <td>{{ $part->fech_cierre }}</td>
                                <td width="140px">
                                    <a href="{{ route('evento.edit', $part->id) }}"
                                        class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                                    <form action="{{ route('evento.destroy', $part->id) }}" method="post"
                                        onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');"
                                        class="d-inline"> @csrf @method('delete') <button type="submit"
                                            class="btn btn-outline-danger btn-sm"><i
                                                class="fas fa-lg fa-trash"></i></button></form>
                                </td>
                            </tr>
                        @endforeach
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
