@extends('layouts.app')

@section('content')

@include('layouts._header')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center py-3">ÚNETE A LA COMUNIDAD BEERCRAFT</h2>
            <h5 class="text-center">No somos expertos pero nos gusta la cerveza.</h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 px-5">
                <form action="/register" method="POST" class="py-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" id="nombre" name="name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
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
                    <div class="mb-3">
                        <label for="password-confi" class="form-label">Confirma contraseña</label>
                        <input type="password" class="form-control" id="password-conf" name="password_confirmation" required>
                        @error('capacity')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-dark mb-4">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection