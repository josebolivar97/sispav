@extends('adminlte::page')

@section('title', 'Crear Estudiante')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Registrar Actividad</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('particiante.registro.store',$participante->id) }}" method="post">
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
                                <label for="inputState">Evento</label>
                                <select id="" class="form-control" name="id_evento">
                                    @foreach ($eventos as $evento)
                                        <option value="{{ $evento->id }}">{{ $evento->nom_evento }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label for="formFile" class="form-label">Agregar PDF del Certificado</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar Archivo</label>
                                    </div>
                                </div>
                            </div>
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
