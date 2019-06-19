@extends("web.template")
<link rel="stylesheet" href="css/prt">
@section("contenido")
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
                <div class="col-lg-4 col-md-6 mb-4 card-group">

                    <div class="card h-100 ">
                        <a href="#"><img class="card-img-top" src="{{ $producto->imagen }}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">

                                <a href="#"><strong>{{$producto->nombre}}</strong></a>
                            </h4>
                            <h5>ARS $ {{$producto->precio}}</h5>
                            <p class="card-text">{{$producto->descripcion}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <small>Stock: {{ $producto->stock }}</small>
                            @if($producto->stock > 0)
                            <input type="button" value="Comprar" class="float-right btn-success"  onclick='compra();'>
                             @endif
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
@endsection

