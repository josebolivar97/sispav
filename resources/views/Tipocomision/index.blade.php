@extends('adminlte::page')

@section('title', 'Participantes')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Tipos de Comisión</h1>
@stop

@section('content')
    @can('tipocomision.create')
        <a class="btn btn-info mb-3" href="{{ route('tipocomision.create') }}">Registrar Tipo de Comisión</a>
    @endcan

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabla-tipocomision" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($tipcomisi as $part)
                            <tr>
                                <td width="140px">{{ $loop->iteration }}</td>
                                <td>{{ $part->nom_tipcomision }}</td>
                                <td width="140px">
                                    @can('tipocomision.edit')
                                        <a href="{{ route('tipocomision.edit', $part->id) }}"
                                            class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                                    @endcan
                                    @can('tipocomision.destroy')
                                        <form action="{{ route('tipocomision.destroy', $part->id) }}" method="post"
                                            class="d-inline form-eliminar" class="d-inline"> @csrf @method('delete') <button
                                                type="submit" class="btn btn-outline-danger btn-sm"><i
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: "{{ session('success') }}",
                    icon: "success",
                    confirmButtonText: "OK",
                });
            });
        </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Confirmación al eliminar
            const forms = document.querySelectorAll('.form-eliminar');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault(); // Detiene el envío del formulario

                    Swal.fire({
                        title: "¿Estás seguro?",
                        text: "¡No podrás revertir esto!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Sí, ¡elimínalo!",
                        cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // Envía el formulario si el usuario confirma
                        }
                    });
                });
            });

            // Inicializar DataTable
            $('#tabla-tipocomision').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
                }
            });
        });
    </script>
@endsection
