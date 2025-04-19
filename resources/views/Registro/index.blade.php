@extends('adminlte::page')

@section('title', 'Participantes')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Registro de Participaciones</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabla-registroindex" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Codigo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participante as $part)
                            <tr class="text-center">
                                <td width="100px">{{ $loop->iteration }}</td>
                                <td>{{ $part->nombres }} {{ $part->apellido_paterno }} {{ $part->apellido_materno }}</td>
                                <td>{{ $part->dni }}</td>
                                <td width="200px">
                                    <a href="{{ route('participante.registro.show', $part->id) }}"
                                        class="btn btn-outline-info btn-sm"><i class="fas fa-address-card"></i></a>
                                    <a href="{{ route('participante.registro.create', $part->id) }}"
                                        class="btn btn-outline-primary btn-sm"><i class="fas fa-plus-square"></i></a>
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
            $('#tabla-registroindex').DataTable({
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
