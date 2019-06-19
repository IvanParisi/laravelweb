@extends('panel.template')

@section('contenido')

    @if(Session::has('ok'))
        <p class="alert alert-success margen">{{ Session::get('ok') }}</p>
    @endif


    <body id="fullscreen_bg" class="fondo2">
        <div class="container margen align-content-center">
            <body class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header br-9">
                            <h4 class="card-title">Usuarios</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Status
                                    </th>

                                    <th class="text-right btn-success">
                                        Acciones
                                    </th>
                                    </thead>
                                    <tbody>
                                    @forelse($usuarios as $usuario)
                                    <tr>
                                        <td>
                                            {{ $usuario->name }}
                                        </td>
                                        <td>
                                            {{ $usuario->email }}
                                        </td>
                                        <td>
                                           @if($usuario->tipo_id == 1)
                                               <p class="text-danger">El Jefe de los Minisupers</p>
                                            @elseif($usuario->tipo_id == 2)
                                                <p class="text-success">Plebe</p>
                                               @else
                                                <p class="text-warning">El Profe que pone 10</p>
                                            @endif
                                        </td>
                                        <td class="text-right">
                                        @if($usuario->tipo_id == 2)
                                            <form action="{{ route('usuarios.destroy',[$usuario->id])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="DELETE" name="_method">
                                                <button type="submit" class="btn btn-sm btn-danger ">Eliminar</button>
                                            </form>
                                            @elseif($usuario->tipo_id == 3)
                                                <button type="submit" class="btn btn-sm btn-warning"><a href="https://www.youtube.com/watch?v=y6120QOlsfU" target="_blank">??????</a></button>
                                            @endif
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
            </body>
@endsection
