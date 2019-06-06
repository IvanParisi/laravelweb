<?php
include_once("arrays.php");
include_once("funcion.php");




?>

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
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">

</head>

<body>
<a href="index.php?page=1"></a>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark colorbarra fixed-top" method="get">
    <div class="container">

        <a class="navbar-brand logo" href="index.php?page=1">Dame la pata</a>
        <img src="img/prueba.jpg" class="img-fluid|thumbnail rounded-top|rounded-right|rounded-bottom|rounded-left|rounded-circle|" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto navbar-brand">

                <li class="nav-item">
                    <a class="nav-link" href=" {{ route("web.index") }} ">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("web.productos") }}">Productos</a>
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


<!-- Page Content -->
<div class="container margen">

    <div class="row">


        <!-- /.col-lg-3 -->

        <div class="col-lg-12">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/slider.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
                    </div>

                </div>
            </div>

            <div class="row">

                <h1 class="texrojo col-lg-12 text-center">Ecuentra tu prducto</h1>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive" src="img/gato.png" alt="Gato">
                        <div class="overlay">
                            <h2>Nutricion para tu gato</h2>
                            <a class="info" href="index.php?page=2&#gatos">Productos</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive" src="img/perro.png" alt="Gato">
                        <div class="overlay">
                            <h2>Nutricion para tu perro</h2>
                            <a class="info" href="index.php?page=2&#perro">Productos</a>
                        </div>
                    </div>
                </div>



            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<div class="jumbotron text-center">
    <div class="col-md-12">
        <h2 class="w3-animate-top pepas">
            <span>Quiénes sómos?</span>
        </h2>
        <div class="row">
            <div class="col-md-12 col-md-offset-2 subtext pep">
                <h3 class="w3-animate-bottom fadeIn w3-animate-bottom text-center">
                    Las personas pueden cambiar pero nuestro ideal se mantiene intacto a pesar del tiempo y las variantes condiciones sociales y económicas que nos han tocado vivir. Hace algunos años, un grupo de personas, entre ellos médicos veterinarios, miembros de la Sociedad Argentina Protectora de los Animales, y  algunos más, creyeron en la idea de trabajar juntos para la salud y bienestar de los animales de compañía. Hoy nos mantenemos fiel a esa tarea que nos legaron, y la tratamos de llevar a la práctica con el respeto por nuestros pacientes, con mucho esfuerzo, con  honestidad y sobretodo con cariño.</h3>
            </div>
        </div>


        <div class="row">
            <?php
            foreach($objetivos as $items):
            ?>
            <div class="col-md-6">
                <div class="w3-animate-bottom">
                    <h3><?= $items["H3"] ?></h3>
                    <p><?= $items["Texto"] ?></p>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
        <h2 class="w3-animate-top pepas">
            <span>Nustros servicios</span>
        </h2>

        <div class="row margen">
            <?php
            foreach($servicios as $key):
            ?>
            <div class="col-lg-3 col-md-6 ">
                <div class="w3-animate-bottom">
                    <img src="<?= $key["Ruta"] ?>" class="img-fluid" alt="<?= $key["Alt"] ?>">
                    <h3><?= $key["H3"] ?></h3>
                    <p><?= $key["Texto"] ?></p>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>
<




<!-- Footer -->
<footer class="py-5 bg-dark footer ">
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
