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
                    <form action="{{ route('usuarios.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" name="password"
                                    value="{{ old('password') }}">

                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Confirmar Contraseña</label>
                                <input type="password" class="form-control" name="apellido_materno"
                                    value="{{ old('Confirmar Contraseña') }}">

                                @error('apellido_materno')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label for="inputState">Rol</label>
                                <select id="" class="form-control" name="rol">
                                    @foreach($roles as $rol)
                                        <option value="{{$rol->name}}">{{$rol->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('usuarios.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@stop
