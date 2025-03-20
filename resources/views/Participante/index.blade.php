@extends('adminlte::page')

@section('title', 'Participantes')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Participantes</h1>
@stop

@section('content')
<a class="btn btn-info mb-3" href="{{route('participantes.create')}}">Registrar Participante</a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>DNI</th>
                            <th>Nombres y Apellidos</th>
                            <th>Comisión</th>
                            <th>Celular</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participante as $part)
                                <tr>
                                    <td>{{ $part->dni }}</td>
                                    <td>{{ $part->nombres }} {{ $part->apellido_paterno }} {{ $part->apellido_materno }}</td>
                                    <td>{{ $part->comision }}</td>
                                    <td width="140px">
                                        <a href="{{ route('usuarios.show', $part->id) }}"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-clipboard"></i></a>
                                        <a href="{{ route('usuarios.edit', $part->id) }}"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                                        <form action="{{ route('usuarios.destroy', $part->id) }}" method="post"
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
