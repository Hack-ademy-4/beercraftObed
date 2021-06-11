@extends('layouts.app')

@section('content')

@include('layouts._header')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center py-3">CONTACTO</h2>
            <h5 class="text-center">No dudes en contactar con nosotros y comentarnos todo lo que quieras.</h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 px-5">
                <form action="{{route('contacto_nuevo')}}" method="POST" class="py-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                        @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" name="message" id="message" rows="5">{{ old('message') }}</textarea>
                        @error('message')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-dark mb-4">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection