@extends('adminlte::page')

@section('title', 'Participantes')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Participantes</h1>
@stop

@section('content')
    <a class="btn btn-info mb-3" href="{{ route('participantes.create') }}">Registrar Participante</a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabla-participantesindex" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>N°</th>
                            <th>DNI</th>
                            <th>Nombres y Apellidos</th>
                            <th>Comisión</th>
                            <th>Celular</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($participante as $part)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $part->dni }}</td>
                                <td>{{ $part->nombres }} {{ $part->apellido_paterno }} {{ $part->apellido_materno }}</td>
                                <td>{{ $part->comision->nombrecomision }}</td>
                                <td width="140px">
                                    <a href="{{ route('participantes.edit', $part->id) }}"
                                        class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                                    @can('participantes.edit')
                                        <form action="{{ route('participantes.destroy', $part->id) }}" method="post"
                                            class="d-inline"> @csrf @method('delete') <button type="submit"
                                                class="btn btn-outline-danger btn-sm"><i
                                                    class="fas fa-lg fa-trash"></i></button></form>
                                    @endcan
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
            $('#tabla-participantesindex').DataTable({
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
