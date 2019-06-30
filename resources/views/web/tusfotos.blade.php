@extends("web.template")

@section("contenido")


    <div class="container margen align-content-center">
    @if(Session::has('ok'))
        <p class="alert alert-success margen">{{ Session::get('ok') }}</p>
    @endif
        <body class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header br-9">
                    <h4 class="card-title">Galeria</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Nombre
                            </th>
                            <th>
                                Descripcion
                            </th>
                            <th>
                                Imagenes
                            </th>
                            @if(auth()->user()->tipo_id === 1)
                                <th>
                                    Usuario
                                </th>
                            @endif
                            <th class="text-right btn-warning">
                                Control
                            </th>
                            </thead>
                            <tbody>
                            @forelse($fotos as $foto)
                                <tr>
                                    <td>
                                        {{ $foto->nombre }}
                                    </td>
                                    <td>
                                        {{ $foto->descripcion }}
                                    </td>
                                    <td>
                                        <img src="{{$foto->img}}" alt="{{$foto->nombre}}" width="50">
                                    </td>
                                    @if(auth()->user()->tipo_id === 1)
                                    <td>
                                       {{ \App\User::find($foto->user_id)->name }}
                                    </td>
                                    @endif
                                    <td>
                                        <div class="dropdown text-right">
                                            <button class="btn btn-sm btn-success dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                Acciones
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                   href="{{ route("cargarfoto.edit",$foto->id) }}">Editar</a>
                                                <form action="{{ route("cargarfoto.destroy",$foto->id) }}" method="post">
                                                    @method("DELETE")
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">Borrar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td>
                                    No hay usuarios
                                </td>
                            @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

@endsection
