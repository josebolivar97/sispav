@extends('adminlte::page')

@section('title', 'Crear Estudiante')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Registrar Participante</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card card-info card-outline mb-4">
                <div class="card-body">
                    <form action="{{ route('participantes.store') }}" method="post">
                        @csrf
                        <div class="">
                            <div class="text-center border-bottom pb-2 mb-3">
                                <h3 class="text-uppercase">Datos Personales</h3>
                            </div>
                            <div class="form-row align-items-end">
                            
                                <div class="form-group col-md-4">
                                    <label>DNI</label>
                                    <input type="text" class="form-control" name="dni" value="{{ old('dni') }}">
                                    @error('dni')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><label for=""></label>
                                <div class="form-group col-md-2">
                                    <label>&nbsp;</label>
                                    <button type="button" class="btn btn-primary btn-block" onclick="buscar()">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 mt-2">
                                    <label>Nombres</label>
                                    <input type="text" class="form-control" name="nombres"
                                        value="{{ old('nombres') }}"readonly>

                                    @error('nombres')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="form-group col-md-4 mt-2">
                                    <label>Apellido Paterno</label>
                                    <input type="text" class="form-control" name="apellido_paterno"
                                        value="{{ old('apellido_paterno') }}"readonly>

                                    @error('apellido_paterno')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="form-group col-md-4 mt-2">
                                    <label>Apellido Materno</label>
                                    <input type="text" class="form-control" name="apellido_materno"
                                        value="{{ old('apellido_materno') }}"readonly>

                                    @error('apellido_materno')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 mt-2">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" name="f_nacimiento"
                                        value="{{ old('f_nacimiento') }}">

                                    @error('f_nacimiento')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 mt-2">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 mt-2">
                                    <label>Celular</label>
                                    <input type="text" class="form-control" name="celular" value="{{ old('celular') }}">
                                    @error('celular')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center border-bottom pb-2 mb-3"></div>
                            <div class="text-center border-bottom pb-2 mb-3">
                                <h3 class="text-uppercase">Lugar de Nacimiento y Residencia</h3>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-4 mt-2">
                                    <label>Departamento</label>
                                    <input type="text" class="form-control" name="departamento"
                                        value="{{ old('departamento') }}">
                                </div>
                                <div class="form-group col-md-4 mt-2">
                                    <label>Provincia</label>
                                    <input type="text" class="form-control" name="provincia"
                                        value="{{ old('provincia') }}">
                                </div>
                                <div class="form-group col-md-4 mt-2">
                                    <label>Distrito</label>
                                    <input type="text" class="form-control" name="distrito"
                                        value="{{ old('distrito') }}">
                                </div>
                                <div class="form-group col-md-12 mt-2">
                                    <label class="card-title">Lugar de Residencia</label>
                                    <input type="text" class="form-control" name="l_residencia"
                                        value="{{ old('l_residencia') }}">

                                    @error('l_residencia')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center border-bottom pb-2 mb-3"></div>
                            <div class="text-center border-bottom pb-2 mb-3">
                                <h3 class="text-uppercase">Informacion Profesional</h3>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mt-2">
                                    <label>Profesion</label>
                                    <input type="text" class="form-control" name="profesion"
                                        value="{{ old('profesion') }}">

                                    @error('profesion')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mt-2">
                                    <label>Organización</label>
                                    <input type="text" class="form-control" name="organizacion"
                                        value="{{ old('organizacion') }}">
                                    @error('organizacion')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mt-2">
                                    <label for="inputState">Comisión</label>
                                    <select id="" class="form-control" name="id_comision">
                                        @foreach ($comision as $rol)
                                            <option value="{{ $rol->id }}">{{ $rol->nombrecomision }}</option>
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

@section('js')
    <script>
        async function buscar() {
            const dni = document.querySelector('input[name="dni"]').value;

            if (!dni || dni.length !== 8) {
                alert('Por favor ingrese un DNI válido de 8 dígitos');
                return;
            }

            try {
                const response = await fetch(`https://cultureg.munipuno.gob.pe/api/dni/${dni}`);
                const data = await response.json();

                console.log('Datos recibidos:', data);

                // Autocompletar campos si la API devuelve datos
                if (data) {

                    document.querySelector('input[name="nombres"]').value = data.nombres || '';
                    document.querySelector('input[name="apellido_paterno"]').value = data.apellidoPaterno || '';
                    document.querySelector('input[name="apellido_materno"]').value = data.apellidoMaterno || '';
                    // Continúa con los demás campos...
                }
            } catch (error) {
                console.error('Error al buscar DNI:', error);
                alert('Ocurrió un error al consultar el DNI');
            }
        }
        // async function buscar() {
        //     // const data = await
        //     console.log('hola');
        //     const myHeaders = new Headers();
        //     const requestOptions = {
        //     method: "GET",
        //     headers: myHeaders,
        //     redirect: "follow"
        //     };

        //     fetch("http://127.0.0.1:8000/api/dni/74947760", requestOptions)
        //     .then((response) => response.text())
        //     .then((result) => console.log(result))
        //     .catch((error) => console.error(error));
        // }
        function xd(e) {
            const dni = e.target.value;
            console.log('DNI ingresado:', dni);
        }
    </script>
@endsection
