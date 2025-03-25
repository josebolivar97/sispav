@extends('adminlte::page')

@section('title', 'Crear Estudiante')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Tipos de Comisión</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tipocomision.update', $tipocomision->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nom_tipcomision"
                                    value="{{ old('nom_tipcomision', $tipocomision->nom_tipcomision) }}">
                                @error('nom_tipcomision')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('tipocomision.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
