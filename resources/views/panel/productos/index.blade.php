@extends('panel.template')

@section('contenido')
    <div class="container">

        @if(Session::has('ok'))
            <p class="alert alert-success margen">{{ Session::get('ok') }}</p>
        @endif

        <div class="row mt-3">
    <div class="col-12">
        <table class="table  mt-5">

            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Accion</th>

            </tr>

            </thead>
            <tbody>


            @forelse($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td height="100">{{ $producto->descripcion }}</td>
                <td>${{$producto->precio}}</td>
                <td><img src="{{$producto->imagen}}" alt="{{$producto->nombre}}" width="50"></td>
                <div class="row">
                    <td>
                        <div class="btn-group">

                            <form action="{{ route('productos.destroy',[$producto->id])}} " method="POST">
                            @csrf
                            <input type="hidden" value="DELETE" name="_method">
                            <button type="submit" class="btn btn-sm btn-danger ">Eliminar</button>
                            </form>
                                <a type="submit" class="btn btn-sm btn-primary ml-1 " href="{{ route('productos.edit',[$producto->id])}}"> Editar</a>
                        </div>
                    </td>
                </div>

            </tr>
        @empty
            <tr>
                <td colspan="7">No hay Productos cargados</td>
            </tr>
            @endforelse
            </tbody>
        </table>

    </div>

    </div>
    </div>
    </div>

    </div>
    </div>
@endsection
