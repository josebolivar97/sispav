@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('participantes.update', $participante->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>DNI</label>
                                <input type="text" class="form-control" name="dni"
                                    value="{{ old('dni', $participante->dni) }}">
                                @error('dni')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mt-2">
                                <label>Nombres</label>
                                <input type="text" class="form-control" name="nombres"
                                    value="{{ old('nombres', $participante->nombres) }}">
                                @error('nombres')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellido_paterno"
                                    value="{{ old('apellido_paterno', $participante->apellido_paterno) }}">

                                @error('apellido_paterno')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control" name="apellido_materno"
                                    value="{{ old('apellido_materno', $participante->apellido_materno) }}">

                                @error('apellido_materno')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="f_nacimiento"
                                    value="{{ old('f_nacimiento', $participante->f_nacimiento) }}">

                                @error('f_nacimiento')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Lugar de Nacimiento</label>
                                <input type="text" class="form-control" name="l_nacimiento"
                                    value="{{ old('l_nacimiento', $participante->l_nacimiento) }}">

                                @error('l_nacimiento')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Comision</label>
                                <input type="text" class="form-control" name="comision"
                                    value="{{ old('comision', $participante->comision) }}">

                                @error('comision')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Profesion</label>
                                <input type="text" class="form-control" name="profesion"
                                    value="{{ old('profesion', $participante->profesion) }}">

                                @error('profesion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Lugar de Residencia</label>
                                <input type="text" class="form-control" name="l_residencia"
                                    value="{{ old('l_residencia', $participante->l_residencia) }}">

                                @error('l_residencia')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Organización</label>
                                <input type="text" class="form-control" name="organizacion"
                                    value="{{ old('organizacion', $participante->organizacion) }}">
                                @error('organizacion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Celular</label>
                                <input type="text" class="form-control" name="celular"
                                    value="{{ old('celular', $participante->celular) }}">
                                @error('celular')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('participantes.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
