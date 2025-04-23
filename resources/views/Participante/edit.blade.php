@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Datos del Participante</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card card-info card-outline mb-4">
                <div class="card-body">
                    <form action="{{ route('participantes.update', $participante->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div>
                            <div class="text-center border-bottom pb-2 mb-3">
                                <h3 class="text-uppercase">Datos Personales</h3>
                            </div>
                            <div class="form-row">
                                <div class="form-row">
                                    <div class="form-group col-md-4 mt-2">
                                        <label>DNI</label>
                                        <input type="text" class="form-control" name="dni"
                                            value="{{ old('dni', $participante->dni) }}">
                                        @error('dni')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4 mt-2">
                                        <label>Nombres</label>
                                        <input type="text" class="form-control" name="nombres"
                                            value="{{ old('nombres', $participante->nombres) }}">
                                        @error('nombres')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                    <div class="form-group col-md-4 mt-2">
                                        <label>Apellido Paterno</label>
                                        <input type="text" class="form-control" name="apellido_paterno"
                                            value="{{ old('apellido_paterno', $participante->apellido_paterno) }}">

                                        @error('apellido_paterno')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                    <div class="form-group col-md-4 mt-2">
                                        <label>Apellido Materno</label>
                                        <input type="text" class="form-control" name="apellido_materno"
                                            value="{{ old('apellido_materno', $participante->apellido_materno) }}">

                                        @error('apellido_materno')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4 mt-2">
                                        <label>Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="f_nacimiento"
                                            value="{{ old('f_nacimiento', $participante->f_nacimiento) }}">

                                        @error('f_nacimiento')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4 mt-2">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="f_nacimiento"
                                            value="{{ old('email', $participante->email) }}">

                                        @error('f_nacimiento')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4 mt-2">
                                        <label>Celular</label>
                                        <input type="text" class="form-control" name="celular"
                                            value="{{ old('celular', $participante->celular) }}">
                                        @error('celular')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border-bottom pb-2 mb-3"></div>
                            <div class="text-center border-bottom pb-2 mb-3">
                                <h3 class="text-uppercase">Lugar de Nacimiento y Residencia</h3>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 mt-2">
                                    <label>Departamento</label>
                                    <input type="text" class="form-control" name="l_nacimiento"
                                        value="{{ old('departamento', $participante->departamento) }}">

                                    @error('l_nacimiento')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 mt-2">
                                    <label>Provincia</label>
                                    <input type="text" class="form-control" name="l_nacimiento"
                                        value="{{ old('provincia', $participante->provincia) }}">

                                    @error('l_nacimiento')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 mt-2">
                                    <label>Distrito</label>
                                    <input type="text" class="form-control" name="l_nacimiento"
                                        value="{{ old('distrito', $participante->distrito) }}">

                                    @error('l_nacimiento')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mt-2">
                                    <label>Lugar de Residencia</label>
                                    <input type="text" class="form-control" name="l_residencia"
                                        value="{{ old('l_residencia', $participante->l_residencia) }}">

                                    @error('l_residencia')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center border-bottom pb-2 mb-3">
                                <h3 class="text-uppercase">Informacion Profesional</h3>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mt-2">
                                    <label>Profesion</label>
                                    <input type="text" class="form-control" name="profesion"
                                        value="{{ old('profesion', $participante->profesion) }}">

                                    @error('profesion')
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
                                    <label>Comision</label>
                                    <select class="form-control" name="id_comision">
                                        @foreach ($comision as $comi)
                                            <option value="{{ $comi->id }}"
                                                {{ $participante->id_comision == $comi->id ? 'selected' : '' }}>
                                                {{ $comi->nombrecomision }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('participantes.index') }}"
                                class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
