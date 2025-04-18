@extends('adminlte::page')

@section('title', 'Participantes')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Usuarios</h1>
@stop

@section('content')
    <a class="btn btn-info mb-3" href="{{ route('usuarios.create') }}">Registro Usuarios</a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabla-usuariosindex" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuario as $part)
                            <tr>
                                <td>{{ $part->name }}</td>
                                <td>{{ $part->email }}</td>
                                <td width="140px">
                                    <a href="{{ route('usuarios.edit', $part->id) }}"
                                        class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                                    <form action="{{ route('usuarios.destroy', $part->id) }}" method="post"
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
        $(document).ready(function() {
            $('#tabla-usuariosindex').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
                }
            });
        });
    </script>
@endsection

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package! helooo");
    </script>
@stop
