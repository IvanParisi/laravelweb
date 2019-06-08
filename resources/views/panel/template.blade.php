<!DOCTYPE html>
@php
include_once("funcion.php");
include_once("arrays.php");
@endphp
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="ription" content="Venta de alimentos para mascotas">
    <meta name="author" content="Ivan Parisi">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Panel</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/panel.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">

</head>

<body>
<a href="{{ route("web.index") }}"></a>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark colorbarra fixed-top" method="get">
    <div class="container">

        <a class="navbar-brand logo" href="{{ route("web.index") }}">Dame la pata</a>
        <img src="img/prueba.jpg" class="img-fluid|thumbnail rounded-top|rounded-right|rounded-bottom|rounded-left|rounded-circle|" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto navbar-brand">

                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuarios</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.index") }}">Dame la pata</a>

                </li>
            </ul>
        </div>

    </div>
</nav>

@yield("nav")

@yield("contenido")

@yield("footer")
<!-- Footer -->
<footer class="py-5 bg-dark footer">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Ivan Parisi</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>