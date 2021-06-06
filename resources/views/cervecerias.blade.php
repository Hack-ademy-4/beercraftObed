@extends('layouts.app')
@section('content')

@include('layouts._header')


<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($cervecerias as $cerveceria)
        <div class="col">
            <div class="card">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.delgranoalacopa.com%2Fwp-content%2Fuploads%2F2018%2F08%2Fep1607napar1.jpg&f=1&nofb=1" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">{{$cerveceria["nombre"]}}</h5>
                    <p class="card-text">
                        {{$cerveceria["desc"]}}
                    </p>
                    <div><span class="badge bg-secondary">AFORO {{$cerveceria["aforo"]}} PERSONAS</span></h5></div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>    


@endsection
