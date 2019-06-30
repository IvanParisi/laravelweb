@extends("web.template")

@section('contenido')

  <body class="fondo3">
    <div class="row margencar">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-6 offset-3">
            @if(isset($foto))
                <form action="{{ route("cargarfoto.update",$foto->id) }}" enctype="multipart/form-data" method="POST" class="bg-light p-3">
                    @method("PUT")
            @else
                <form action="{{ route("cargarfoto.store") }}" enctype="multipart/form-data" method="POST" class="bg-light p-3">
                @endif
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre de su mascota</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Felini" maxlength="20" value="{{ isset($foto) ? $foto->nombre : old('nombre') }}">
                </div>

                <div class="form-group">
                    <label for="descripcion">Cuentenos de su mascota</label>
                    <textarea type="text" name="descripcion" id="descripcion" class="form-control" aria-describedby="help_descripcion" maxlength="220">{{ isset($foto) ? $foto->descripcion : old('descripcion') }}</textarea>
                </div>

                    @isset($foto)
                        <div class="form-group">
                            <p>Imagen</p>
                            <img src="{{ $foto->img }}" alt="" width="120">
                        </div>
                    @endisset

                <div class="form-group">
                    <label for="imagen">Suba una foto!</label>

                    <input type="file" accept="image/jpeg" class="form-control-file" name="imagen" id="imagen" placeholder="" aria-describedby="help_imagen">
                    <small id="help_imagen" class="form-text text-muted">La foto de su mascota debe ser de formato jpg</small>
                </div>
                <button type="submit" class="btn btn-primary">Finalizar</button>
            </form>

        </div>

    </div>

    </div>
  </body>

@endsection
