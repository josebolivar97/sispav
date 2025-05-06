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
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($participante as $part)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $part->dni }}</td>
                                <td>{{ $part->nombres }} {{ $part->apellido_paterno }} {{ $part->apellido_materno }}</td>
                                <td>{{ $part->comision->nombrecomision }}</td>
                                @if ($part->estado == 1)
                                <td class="bg-success">Activo</td>
                                @else
                                <td class="bg-red">Inactivo</td>
                                @endif
                                <td width="140px">
                                    <a href="{{ route('participantes.edit', $part->id) }}"
                                        class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                                    @can('participantes.edit')
                                        <form action="{{ route('participantes.destroy', $part->id) }}" method="post"
                                            class="d-inline form-eliminar"> @csrf @method('delete') <button type="submit"
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

