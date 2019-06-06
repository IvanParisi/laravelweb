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

    <h1 class="text-center texrojo "><strong>Contáctenos</strong></h1><br />

    <div class="row">
        <div class="col-md-7">
            <?php
            if(!empty($_GET["error"]) && $_GET["error"] == "si"):
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Error!</strong> Los campos <b>Nombre, Apellido, Email y Texto</b> son obligatorios
            </div>
            <?php
            endif;

            ?>
            <?php
            if(!empty($_GET["malo"]) && $_GET["malo"] == "si"):
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Error!</strong><b> Debe tener al menos un animal preferido :C</b>
            </div>
            <?php
            endif;

            ?>
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading"></h4>
                <strong>Atento!</strong> <p> Todos los campos son obligatorios!!</p>
                <p class="mb-0"></p>
            </div>
            <form action="html/procesardatos.php" method="post">

                <input type="text" class="form-control" name="nombre" placeholder="Nombre..." /><br />
                <input type="text" class="form-control" name="apellido" placeholder="Apellido..." /><br />
                <input type="text" class="form-control" name="email" placeholder="E-mail..." /><br />
                <textarea type="text" class="form-control" name="texto" placeholder="En que lo podemos ayudar?" style="height:150px;"></textarea><br />
                <label for=""><strong>Animal preferido</strong> </label>
                <div class="form-check">
                    <label class="form-check-label">

                        <input type="checkbox" class="form-check-input" name="preferidos[]" id="" value="Perro" checked>
                        Perro
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">

                        <input type="checkbox" class="form-check-input" name=" preferidos[] " id="" value="Gato">
                        Gato
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name=" preferidos[] " id="" value="Tortuga">
                        Tortuga
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name=" preferidos[] " id="" value="Conejo">
                        Conejo
                    </label>
                </div>
                <input class="btn btn-primary mb-2" type="submit" value="Enviar" /><br /><br />



            </form>
        </div>
        <div class="col-md-4 col-lg-5">
            <b>Contacto directo:</b> <br />
            Celular: 1568489542<br />
            E-mail: <a href="mailto:ivan.parisi@davinci.edu.ar">ivan.parisi@davinci.edu.ar</a><br />
            <br /><br />
            <b>Direccion</b><br />
            Dame la pata S.R.L<br />
            Av. San Juan 2861<br />
        </div>
    </div>
</div>

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
