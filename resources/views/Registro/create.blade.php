@extends('adminlte::page')

@section('title', 'Crear Estudiante')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Registrar Tipo de Comisión</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{-- {{ route('registro.create') }} --}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre de la Institución</label>
                                <input type="text" class="form-control" name="institucion"
                                    value="{{ old('institucion') }}">
                                @error('institucion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre de Reconocimiento</label>
                                <input type="text" class="form-control" name="nom_reconocimiento"
                                    value="{{ old('nom_reconocimiento') }}">
                                @error('nom_reconocimiento')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label for="formFile" class="form-label">Agregar PDF del Certificado</label>
                                <input class="form-control" name   ="pdf_reconocimiento" id="formFile"
                                    value="{{ old('pdf_reconocimiento') }}">
                                @error('pdf_reconocimiento')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            {{-- <div class="form-group col-md-6 mt-2">
                                <label for="inputState">Tipo de Comisión</label>
                                <select id="" class="form-control" name="id_tipcomisions">
                                    @foreach ($tipocomision as $rol)
                                        <option value="{{ $rol->id }}">{{ $rol->nom_tipcomision }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('registro.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
