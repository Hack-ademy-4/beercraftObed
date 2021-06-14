@extends('layouts.app')

@section('content')
@include('layouts._header')

<div class="container py-5">
    <div class="row text-center py-3">
        <div class="col-12">
            <h2>EDITA LA CERVECERIA</h2>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-lg-1"></div>
        <div class="col-lg-4 px-5">
            <div class="card">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.delgranoalacopa.com%2Fwp-content%2Fuploads%2F2018%2F08%2Fep1607napar1.jpg&f=1&nofb=1" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">{{$cerveceria->name}}</h5>
                    <p class="card-text">
                        {{$cerveceria->description}}
                    </p>
                    <div><span class="badge bg-secondary">AFORO {{$cerveceria->capacity}} PERSONAS</span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 px-5">
            <form action="{{route('update.cerveceria', ['id'=>$cerveceria->id])}}" method="POST" class="py-3">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de la cervecería</label>
                    <input type="text" class="form-control" id="nombre" name="name" value="{{ old('name')}}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" name="description" id="description" rows="5">{{old('description')}}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="aforo" class="form-label">Aforo</label>
                    <input type="number" class="form-control" id="nombre" name="capacity" value="{{ old('capacity')}}">
                    @error('capacity')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3 d-flex">
                        <button type="submit" class="btn btn-outline-dark mx-1">Enviar</button>
                        <a class="btn btn-outline-dark mx-1" href="{{route('cervecerias')}}">Cancelar</a>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-end ">
                        <div>
                        <form action="" method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-outline-dark">Eliminar</button>
                        </form>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>


@endsection