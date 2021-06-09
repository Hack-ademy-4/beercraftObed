@extends('layouts.app')

@section('content')

@include('layouts._header')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center py-3">AGREGA UNA CERVECERIA</h2>
            <h5 class="text-center">Comparte con el mundo tu cervecería favorita.</h5>F
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 px-5">
                <form action="{{route('nueva_Cerveceria')}}" method="POST" class="py-3">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de la cervecería</label>
                        <input type="text" class="form-control" id="nombre" name="name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="nombre" name="description" required value="{{ old('description') }}">
                        @error('descripcion')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="aforo" class="form-label">Aforo</label>
                        <input type="number" class="form-control" id="nombre" name="capacity" required value="{{ old('capacity') }}">
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