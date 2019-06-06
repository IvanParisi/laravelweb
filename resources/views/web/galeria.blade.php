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


<head>
    <link rel="stylesheet" href="../css/cards-gallery.css">
</head>


        <body>
        <?php
        if(!empty($_GET["ok"])):
        $ok = $_GET["oks"];
        if($ok == "ok"):
            $mensaje = "Se subio la imagen correctamente";
        else:
            $mensaje = "";
        endif;
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Error: </strong> <?= $mensaje ?>.
        </div>
        <?php
        endif;
        ?>
        <div class="container margen">

            <div class="text-center">
                <h1 class="texrojo big display-3" >Galeria</h1>
                <p class="margen">
                    🐱Este es un lugar, donde la gente puede subir la imagen de su mascota
                    y compartirla con los demás!.🐶 </p>
                <p class="center-block btn btn-outline-primary "><a href="index.php?page=8">Subi la tuya!</a></p>
                <br>
                <small id="help_descripcion" class="text-muted">Es necesario estar registrado.</small>
            </div>

        </div>

        <section class="gallery-block cards-gallery">
            <div class="container">

                <div class="row" aling="center">
<!--                    --><?php
//
//                    foreach (\Clases\ItemsGaleria::getGaleria() as $item):
//
//                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">

                            <img src="//IMAGEN" alt="Card Image" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h6>///NOMBRRE</h6>
                                <p class="text-muted card-text">//DESCRIPCION</p>
                            </div>
                            <small id="help_descripcion" class="text-muted">Subida por el usuario: ///USUARIO</small>
                        </div>

                    </div>
<!--                    --><?php
//                    endforeach;
//                    ?>
                </div>
            </div>

        </section>








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
