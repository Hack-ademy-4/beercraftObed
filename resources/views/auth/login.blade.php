@extends('layouts.app')

@section('content')
@include('layouts._header')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center py-3">Iniciar sesión</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 px-5">
                <form action="/login" method="POST" class="py-3">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                        @error('descripcion')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @error('capacity')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-dark mb-4">Login</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-12 text-center">
        <h3 class="py-3">¿Aún no tienes cuenta?</h3>
        <a class="btn btn-outline-dark" href="{{route('register')}}">REGÍSTRATE</a> 
    </div>
    <div style="height:100px">
    </div>
    </div>
</div>

@endsection