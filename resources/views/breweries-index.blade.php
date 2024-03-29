@extends('layouts.app')


@push('css')
<style>
a:link,
a:visited,
a:hover
a:active{
    text-decoration: none;
    text-decoration-color: none;
    color: #000;
}
</style>
@endpush
@section('content')

@include('layouts._header')


<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($cervecerias as $cerveceria)
        <div class="col">
            <a href="{{route('detallesCerveceria', ['id'=>$cerveceria->id])}}">
                <div class="card">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.delgranoalacopa.com%2Fwp-content%2Fuploads%2F2018%2F08%2Fep1607napar1.jpg&f=1&nofb=1" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">{{$cerveceria["name"]}}</h5>
                        <p class="card-text">
                            {{$cerveceria["description"]}}
                        </p>
                        <div><span class="badge bg-secondary">AFORO {{$cerveceria["capacity"]}} PERSONAS</span></h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection