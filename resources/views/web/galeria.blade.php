@extends("web.template")


@section("contenido")



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
                @guest
                    <a href=" {{ route('register')}} " class="h2 btn-link">Registrate para subir la tuya</a>
                    <br>
                    <small id="help_descripcion" class="text-muted"><a href="{{ route('login')}}" class="btn-link h6">O ingresa</a></small>
                @else
                    <p class="center-block btn btn-outline-primary "><a href="{{ route("cargarfoto.create")}}">Subi la tuya!</a></p>
                @endguest

            </div>

        </div>

        <section class="gallery-block cards-gallery">
            <div class="container">

                <div class="row" aling="center">
                @foreach($galeria as  $items)


                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <img src="{{ $items->img }}" alt="Card Image" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h6>{{ $items->nombre }}</h6>
                                <p class="text-muted card-text">{{ $items->descripcion }}</p>
                            </div>
                            <small id="help_descripcion" class="text-muted">Subida por el usuario: {{ \App\User::find($items->user_id)->name }}</small>
                        </div>

                    </div>
                @endforeach
                </div>
            </div>

        </section>

@endsection





