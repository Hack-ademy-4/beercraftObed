<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between fs-4" id="navbarNav">
            <div>
                <a class="navbar-brand fs-3" href="/">BEERCRAFT</a>
            </div>
            <ul class="navbar-nav">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PERFIL
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">HOLA {{Auth::user()->name}} </a></li>
                        <li><a class="dropdown-item" href="#">MI CUENTA</a></li>
                        <li><a class="dropdown-item" href="#">MIS CERVECERIAS</a></li>
                        
                    </ul>
                    @endauth
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('inicio')}}">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cervecerias')}}">CERVECERIAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PRODUCTORES</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CERVEZAS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($navCervezas as $cerveza )
                        <li><a class="dropdown-item" href="#">{{$cerveza}}</a></li>
                        @endforeach
                    </ul>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacto')}}">CONTACTO</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    @guest
                    <a class="nav-link btn btn-outline-dark" href="{{route('login')}}">INICIAR SESIÓN</a> 
                    @endguest
                    
                    @auth

                    <form action="/logout" method="post">
                    @csrf
                    <button class="nav-link btn btn-outline-dark">LOGOUT</button>   
                    </form>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>