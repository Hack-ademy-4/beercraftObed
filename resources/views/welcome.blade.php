@extends('layouts.app')
@section('content')
    <!--HEADER-->
    <header class="container-fluid headerinicio">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-white text-center">
                <h1 class="py-4">LA MEJORES CERVECERIAS DE TU CIUDAD</h1>
                <a class="btn btn-outline-light mb-4" href="{{route('cervecerias')}}" role="button">VER TODAS</a>
                <a class="btn btn-outline-light mb-4" href="{{route('agregarCerveceria')}}" role="button"><span><i class="fas fa-plus-circle"></i></span> PUBLICAR NUEVA</a>
            </div>
        </div>
    </header>
    <!--HEADER-->


    <!--SECCTION DE CERVEZA-->

    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h2>DESCUBRE TU NUEVA CERVEZA FAVORITA</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum quibusdam quas tenetur cum cupiditate minima dolorem facere delectus. Ullam, sint aspernatur laborum inventore blanditiis aut nisi ea vero aliquam molestiae.</p>

            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcocinista-vsf.netdna-ssl.com%2Fdownload%2Fbancorecursos%2Fingredientes%2Fingrediente-clarificante-cerveza.jpg&f=1&nofb=1" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.cocinista.es/download/bancorecursos/recetas/receta_cerveza_rubia-americana.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fbodegasalianza.vteximg.com.br%2Farquivos%2Fids%2F164040-800-800%2F30005-1.jpg%3Fv%3D636582970010770000&f=1&nofb=1" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FIN SECCION-->

    <!--SECCTION DE CERVECERIAS POPULARES-->

    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h2>CERVECERIAS POPULARES EN TU CIUDAD</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum quibusdam quas tenetur cum cupiditate minima dolorem facere delectus. Ullam, sint aspernatur laborum inventore blanditiis aut nisi ea vero aliquam molestiae.</p>

            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-2">
            <div class="col">
                <div class="card">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcocinista-vsf.netdna-ssl.com%2Fdownload%2Fbancorecursos%2Fingredientes%2Fingrediente-clarificante-cerveza.jpg&f=1&nofb=1" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.cocinista.es/download/bancorecursos/recetas/receta_cerveza_rubia-americana.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fbodegasalianza.vteximg.com.br%2Farquivos%2Fids%2F164040-800-800%2F30005-1.jpg%3Fv%3D636582970010770000&f=1&nofb=1" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to
                            additional content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FIN SECCION-->

@endsection
