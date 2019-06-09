@extends('panel.template')

@section('contenido')
    <div class="container">
        <div class="row mt-3">
    <div class="col-12">

        <table class="table mt-5">
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
                <td>{{$producto->descripcion}}</td>
                <td>${{$producto->precio}}</td>
                <td><img src="{{$producto->imagen}}" alt="{{$producto->nombre}}" width="50"></td>
                <div class="row">
                    <td>
                        <div class="btn-group">
                            <form action="#" method="post">
                                <input type="hidden" value="" name="idbd">
                                <input type="hidden" value="" name="tipo">
                                <button type="submit" class="btn btn-sm btn-danger disabled" disabled>Eliminar</button>
                            </form>
                            <form action="#" method="post">
                                <input type="hidden" value="" name="imagen">
                                <input type="hidden" value="" name="idbd">
                                <input type="hidden" value="" name="tipo">
                                <button type="submit" class="btn btn-sm btn-primary ml-1 disabled " disabled> Editar</button>
                            </form>
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
