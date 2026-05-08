@extends('layout_auth')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card shadow p-4">

            {{-- Logo --}}
            <div class="text-center mb-4">
                <a class="navbar-brand logo-marca" href="#">
                    <span class="logo-line logo-impulso">IMPULSA</span>
                    <span class="logo-line logo-local">LOCAL</span>
                </a>
            </div>
            <h5 class="text-center mb-3">Inicio de Sesión</h5>

            {{-- Mensaje de error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif

            {{-- Formulario --}}
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Correo electrónico" value="{{ old('email') }}" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</div>
@endsection