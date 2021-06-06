<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,100&display=swap" rel="stylesheet">
    <title>Bienvenidos a Beercraft</title>

    <style>
        body,
        p {
            font-family: 'Lato', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        a,
        button {
            font-family: 'Oswald', sans-serif;
        }

        .headerbg {
            background-image: url("https://revistasumma.com/wp-content/uploads/2015/02/Craft-Beer.jpg");
            background-size: cover;
            background-position: right;
            background-repeat: no-repeat;
            height: 70vh;
        }

        .headerimg {
            background-image: url("https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.delimaster.cl%2Fblog%2Fwp-content%2Fuploads%2F2016%2F01%2Fcervezas-reasonwhy.es_-1440x564_c.jpg&f=1&nofb=1");
            background-size: cover;
            background-position: right;
            background-repeat: no-repeat;
            height: 70vh;
        }

        .bgnav {
            background-color: white !important;
        }

        .card {
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
</head>

<body>
    @include('layouts._navbar')

    @yield('content')

    @include('layouts._footer')

    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>