@extends('adminlte::page')

@section('title', 'Crear Estudiante')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Datos del Usuario</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('usuarios.update', $usuario->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $usuario->name) }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email', $usuario->email) }}">

                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label for="inputState">Rol</label>
                                {{-- <p>{{$rolito[0]}}</p>
                                <p>{{$roles[4]->name == $rolito}}</p> --}}
                                <select class="form-control" name="rol">
                                    @foreach($roles as $rol)
                                        <option value="{{ $rol->name }}" {{ $rolito[0] == $rol->name ? 'selected' : '' }}>
                                            {{ $rol->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('usuarios.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
