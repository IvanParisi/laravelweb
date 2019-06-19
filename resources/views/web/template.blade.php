

    <!DOCTYPE html>

<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="ription" content="Venta de alimentos para mascotas">
    <meta name="author" content="Ivan Parisi">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>DameLaPata</title>
    <link rel="stylesheet" href="css/cards-gallery.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/ladda.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

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
            @guest
            <ul class="navbar-nav  navbar-brand">
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Registro</a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Ingresar</a></li>
            </ul>
            @else
                <ul class="navbar-nav   navbar-brand">
                <li class="nav-item mr-5 dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        @if(Auth::user()->name === 'Admin')

                            <a class="dropdown-item" href="{{ route('panel') }}">Ir al panel</a>
                        @endif

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesiòn') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>

                    <li class="nav-item">
                      <a href="" class="nav-link" onclick="lcompra()">Compras</a>
                    </li>

                </ul>
            @endguest
        </div>

    </div>



</nav>
@yield("nav")

@yield("contenido")

@yield("footer")
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
<script src="js/compra.js"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js?ver=1.11.2'></script>
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/spin.min.js"></script>
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/ladda.min.js"></script>
<script type='text/javascript' src="js/main.js"></script>


</body>

</html>


