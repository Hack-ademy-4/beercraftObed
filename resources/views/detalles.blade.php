@extends('layouts.app')


@section('content')
@include('layouts._header')

<!--Section: Block Content-->
<section class="container py-5">
    <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
            <figure class="view overlay roundedmain-img">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.delgranoalacopa.com%2Fwp-content%2Fuploads%2F2018%2F08%2Fep1607napar1.jpg&f=1&nofb=1" class="img-fluid z-depth-1">
                </a>
        </div>
        <div class="col-md-6">

            <h2>Old Town</h2>
            <p class="mb-2 text-muted text-uppercase small">1323 RESEÑAS</p>
            <p><span class="mr-1"><strong>C/BLANCO, 75, BARCELONA</strong></span></p>
            <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
                error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
                officia quis dolore quos sapiente tempore alias.</p>

            <button class="btn btn-outline-dark mb-4">RESERVAR</button>
        </div>
    </div>
    </div>

</section>


<!--Section: Block Content-->
<section class="container text-center">
    <div class="row">
    <h3>AQUÍ PUEDES ENCONTRAS LA SIGUIENTES CERVEZAS</h3>
    </div>
    <!-- Grid row -->
    <div class="row">
        @foreach ($cervezas as $cerveza)
        <!-- Grid column -->
        <div class="col-lg-3">
            <!-- Card -->
            <div>
                <img class="img-fluid w-50" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.bolinchelidrinkstore.com%2F465-large_default%2Fcerveza-coronita-13-nr-c24.jpg&f=1&nofb=1">
            </div>
            </a>
            <div class="pt-4">
                <h5>CORONA</h5>
                <h6>3€</h6>
            </div>
        </div>
        <!-- Card -->
        @endforeach
    </div>
</section>


@endsection