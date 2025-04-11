@extends('adminlte::page')

@section('title', 'Crear Estudiante')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Registrar Tipo de Comisión</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card card-info card-outline mb-4">
                <div class="card-body">
                    <form action="{{ route('evento.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nom_evento"
                                    value="{{ old('nom_evento') }}">
                                @error('nom_evento')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mt-2">
                                <label>Lugar</label>
                                <input type="text" class="form-control" name="lugar"
                                    value="{{ old('lugar') }}">
                                @error('lugar')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mt-2">
                                <label>Fecha de Inicio</label>
                                <input type="date" class="form-control" name="fech_aperturra"
                                    value="{{ old('fech_aperturra') }}">
                                @error('fech_aperturra')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mt-2">
                                <label>Fecha de Finalización</label>
                                <input type="date" class="form-control" name="fech_cierre"
                                    value="{{ old('fech_cierre') }}">
                                @error('fech_cierre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('evento.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
