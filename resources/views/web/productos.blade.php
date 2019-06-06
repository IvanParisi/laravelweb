<!DOCTYPE html>

<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="ription" content="Venta de alimentos para mascotas">
    <meta name="author" content="Ivan Parisi">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>DameLaPata</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="../js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="../css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">

</head>

<body>
<a href="index.php?page=1"></a>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark colorbarra fixed-top" method="get">
    <div class="container">

        <a class="navbar-brand logo" href="index.php?page=1">Dame la pata</a>
        <img src="../img/prueba.jpg" class="img-fluid|thumbnail rounded-top|rounded-right|rounded-bottom|rounded-left|rounded-circle|" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto navbar-brand">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.index") }} ">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.productos") }} ">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.contacto") }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.galeria") }}">Galeria</a>
                </li>
                <li class="nav-item pepe" >

                </li>



            </ul>

            <ul class="navbar-nav  navbar-brand">
                <li class="nav-item">
                    <a href="index.php?page=5" class="nav-link">Registro</a>

                </li>
                <li class="nav-item">
                    <a href="index.php?page=6" class="nav-link">Ingresar</a></li>
            </ul>



        </div>

    </div>
</nav>


<div class="container margen">

    <div class="row">



        <div class="col-lg-12">
            <div class="row">


            @foreach($productos as $tipoProducto => $listaProductos)



                    <div class="col-lg-12 text-center texrojo" id="perros">
                        <h1><strong>{{ $tipoProducto  }}</strong></h1>
                    </div>

                    <!-- Seccion perros -->
                @foreach($listaProductos as $producto)
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{ "../".$producto->imagen }}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">

                                <a href="#"><strong>{{$producto->nombre}}</strong></a>
                            </h4>
                            <h5>ARS $ {{$producto->precio}}</h5>
                            <p class="card-text">{{$producto->descripcion}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->


<!-- Footer -->
<footer class="py-5 bg-dark footer ">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Ivan Parisi</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../js/jquery/jquery.min.js"></script>
<script src="../js/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
