@extends('adminlte::page')

@section('title', 'Mis Datos')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Mi Informacion</h1>
@stop

@section('content')

        <div class="card card-info card-outline mb-4">
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-4">
                        <form action="">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center">
                                    <font style="vertical-align: inherit;">
                                        <p style="vertical-align: inherit;">
                                            {{ $participante?->nombres . ' ' . $participante?->apellido_paterno . ' ' . $participante?->apellido_materno }}
                                        </p>
                                    </font>
                                </h3>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Dni</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">{{ $participante->dni }}</p>
                                            </font>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Comision</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">
                                                    {{ $participante->comision->nombrecomision }}</p>
                                            </font>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tipo Comision</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">
                                                    {{ $participante->comision->tipocomision->nom_tipcomision ?? 'No asignado' }}
                                                </p>
                                            </font>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Organización</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">
                                                    {{ $participante->organizacion }}
                                                </p>
                                            </font>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Fecha de Nacimiento</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">
                                                    {{ $participante->f_nacimiento }}
                                                </p>
                                            </font>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Lugar de Nacimiento</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">
                                                    {{ $participante->departamento }} / {{ $participante->provincia }} /
                                                    {{ $participante->distrito }}
                                                </p>
                                            </font>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Profesión</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">
                                                    {{ $participante->profesion }}
                                                </p>
                                            </font>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Residencia</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">
                                                    {{ $participante->l_residencia }}
                                                </p>
                                            </font>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Corre Electronico</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">{{ $participante->email }}
                                                </p>
                                            </font>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Celular</font>
                                            </font>
                                        </b> <a class="float-right">
                                            <font style="vertical-align: inherit;">
                                                <p style="margin: 0; vertical-align: inherit;">{{ $participante->celular }}
                                                </p>
                                            </font>
                                        </a>
                                    </li>
                                </ul>

                                {{-- <a href="{{ route('participante.registro.pdf', $participante->id) }}"
                                    class="btn btn-danger mb-3" target="_blank">
                                    <i class="fa fa-file-pdf"></i> Descargar Informe PDF
                                </a> --}}
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table id="tabla-participantes" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>N°</th>
                                        <th>Institución</th>
                                        <th>Reconocimiento</th>
                                        <th>Lugar</th>
                                        <th>Fecha</th>
                                        <th>Pdf</th>

                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($registro as $regi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $regi->institucion }}</td>
                                            <td>{{ $regi->nom_reconocimiento }}</td>
                                            <td>{{ $regi->evento->lugar }}</td>
                                            <td>{{ $regi->evento->fech_aperturra }}</td>
                                            <td width="140px">
                                                <a href="{{ asset('storage/' . $regi->pdf_reconocimiento) }}"
                                                    class="btn btn-outline-danger btn-sm" target="_blank">
                                                    <i class="fa fa-file-pdf"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
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
            $('#tabla-participantes').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
                }
            });
        });
    </script>
@endsection
