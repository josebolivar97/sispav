@extends('adminlte::page')

@section('title', 'Crear Estudiante')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Comisión</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('comision.update', $comision->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombrecomision" value="{{ old('nombrecomision', $comision->nombrecomision) }}">
                                @error('nombrecomision')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6 mt-2">
                                <label for="inputState">Tipo de Comisión</label>
                                {{-- <p>{{$rolito[0]}}</p>
                                <p>{{$roles[4]->name == $rolito}}</p> --}}
                                <select class="form-control" name="id_tipcomisions">
                                    @foreach($tiposcomision as $rol)
                                    <option value="{{ $rol->id }}" {{ $comision->id_tipcomisions == $rol->id ? 'selected' : '' }}>
                                        {{ $rol->nom_tipcomision }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('comision.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
