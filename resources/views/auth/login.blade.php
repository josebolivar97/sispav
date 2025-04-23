@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('title', 'Iniciar Sesión')

@section('auth_header', 'Bienvenido al Sistema de Participación Cultural')

@section('auth_body')
    <form action="{{ route('login') }}" method="post">
        @csrf

        {{-- Correo electrónico --}}
        <x-adminlte-input
            name="email"
            type="email"
            label="Correo electrónico"
            placeholder="ejemplo@correo.com"
            label-class="text-lightblue"
            value="{{ old('email') }}"
            required
            autofocus
        />

        {{-- Contraseña --}}
        <x-adminlte-input
            name="password"
            type="password"
            label="Contraseña"
            placeholder="Ingrese su contraseña"
            label-class="text-lightblue"
            required
        />

        {{-- Recuérdame --}}
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">Recuérdame</label>
            </div>
        </div>

        {{-- Botón Iniciar Sesión --}}
        <x-adminlte-button
            class="btn-block"
            type="submit"
            theme="primary"
            icon="fas fa-sign-in-alt"
            label="Iniciar Sesión"
        />
    </form>
@endsection

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const logo = document.querySelector('.auth-logo a');
        if (logo) {
            logo.href = 'javascript:void(0)'; // Desactiva el enlace
            logo.onclick = () => false; // Evita cualquier acción
        }
    });
</script>
@endpush
