@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center">Registrar Roles</h1>
@stop

@section('content')

<div class="row justify-content-center">
    <div class="card" style="width: 50rem;">
        <div class="card-body">
            <form action="{{route('roles.store')}}" method="POST">
            @method('POST')
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="col-md-9">
                    <label for="">Asignar Roles</label>
                    @foreach($permisos as $permiso)
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" value="{{$permiso->id}}"  name="permisos[]">
                                </div>
                            </div>
                            <input type="text"  class="form-control" aria-label="Text input with checkbox" value="{{$permiso->name}}" disabled>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center">
                <a href="{{route('roles.index')}}" class="btn btn-info m-3 col-md-3">Regresar</a>
                <button class="btn btn-success m-3 col-md-3">Enviar</button>
            </div>
            </form>
        </div>
    </div>
</div>

@stop
