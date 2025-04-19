@extends('adminlte::page')

@section('title', 'Participantes')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Comisión</h1>
@stop

@section('content')
    @can('tipocomision.create')
        <a class="btn btn-info mb-3" href="{{ route('comision.create') }}">Registro de Comisión</a>
    @endcan

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabla-comision" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Tipo de Comisión</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($comision as $part)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $part->nombrecomision }}</td>
                                <td>{{ $part->tipocomision->nom_tipcomision ?? 'Sin tipo' }}</td>
                                <td width="140px">
                                    @can('comision.edit')
                                        <a href="{{ route('comision.edit', $part->id) }}"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                                    @endcan
                                    @can('tipocomision.destroy')
                                        <form action="{{ route('comision.destroy', $part->id) }}" method="post"
                                            onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');"
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
            $('#tabla-comision').DataTable({
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
