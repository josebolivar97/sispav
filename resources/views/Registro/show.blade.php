@extends('adminlte::page')

@section('title', 'Participantes')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Participaciones de </h1>
@stop

@section('content')
    <a class="btn btn-info mb-3" href="{{ route('registro.create') }}">Registrar Participacion</a>
    <div class="card">
        <div class="card-body">
            <div class="col-md-6">
                <form action="">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center">
                            <font style="vertical-align: inherit;">
                                <p style="vertical-align: inherit;">{{ $participante->dni }}</p>
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
                                        {{-- <p style="vertical-align: inherit;">{{ $participante->dni }}</p> --}}
                                    </font>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Nombres y Apellidos</font>
                                    </font>
                                </b> <a class="float-right">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">543</font>
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
                                        <font style="vertical-align: inherit;">13.287</font>
                                    </font>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Sub Comision</font>
                                    </font>
                                </b> <a class="float-right">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">13.287</font>
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
                                        <font style="vertical-align: inherit;">13.287</font>
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
                                        <font style="vertical-align: inherit;">13.287</font>
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
                                        <font style="vertical-align: inherit;">13.287</font>
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
                                        <font style="vertical-align: inherit;">13.287</font>
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
                                        <font style="vertical-align: inherit;">13.287</font>
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
                                        <font style="vertical-align: inherit;">13.287</font>
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
                                        <font style="vertical-align: inherit;">13.287</font>
                                    </font>
                                </a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>N°</th>
                            <th>Evento</th>
                            <th>Reconocimiento</th>
                            <th>Lugar</th>
                            <th>Fecha</th>
                            <th>Pdf</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($participante as $part)
                            <tr>
                                <td>{{ $part->nombres }}</td>
                                <td>{{ $part->profesion }}</td>
                                <td width="140px">
                                    <a href="{{ route('participante.registro.create', $part->id) }}"
                                        class="btn btn-outline-primary btn-sm"><i class="fas fa-bolt"></i></a>
                                    <a href="{{ route('registro.edit', $part->id) }}"
                                        class="btn btn-outline-success btn-sm"><i class="fa fa-file-pdf-o"></i></a>
                                    <form action="{{ route('registro.destroy', $part->id) }}" method="post"
                                        onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');"
                                        class="d-inline"> @csrf @method('delete') <button type="submit"
                                            class="btn btn-outline-danger btn-sm"><i
                                                class="fas fa-lg fa-trash"></i></button></form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
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
