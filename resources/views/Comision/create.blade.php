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
                    <form action="{{ route('comision.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombrecomision"
                                    value="{{ old('nombrecomision') }}">
                                @error('nombrecomision')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mt-2">
                                <label for="inputState">Tipo de Comisión</label>
                                <select id="" class="form-control" name="id_tipcomisions">
                                    @foreach ($tipocomision as $rol)
                                        <option value="{{ $rol->id }}">{{ $rol->nom_tipcomision }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('comision.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
