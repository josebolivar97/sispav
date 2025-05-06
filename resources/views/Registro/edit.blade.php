@extends('adminlte::page')

@section('title', 'Editar Actividad')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Actividad</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('participante.registro.edit', $participante->id) }}" method="post"
                        enctype="multipart/form-data">
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
                                <select class="form-control" name="id_evento">
                                    @foreach ($eventos as $evento)
                                        <option value="{{ $evento->id }}">{{ $evento->nom_evento }}</option>
                                    @endforeach
                                </select>
                                @error('id_evento')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div> <br>

                            <div class="form-group col-md-6 mt-2">
                                <label for="formFile" class="form-label">Agregar PDF del Certificado</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02"
                                        name="pdf_reconocimiento" />
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                                @error('pdf_reconocimiento')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
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
