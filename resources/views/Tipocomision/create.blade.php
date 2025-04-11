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
                    <form action="{{ route('tipocomision.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8 mt-2">  
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nom_tipcomision" value="{{ old('nom_tipcomision') }}">
                                @error('nom_tipcomision')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('tipocomision.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
