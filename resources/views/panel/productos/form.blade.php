@extends('panel.template')

@section('contenido')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="h3">Nuevo producto</h1>
                <div class="row">

                    <div class="col-6 offset-3">
                        <form action="{{ route("productos.store") }}" enctype="multipart/form-data" method="POST" class="bg-light p-3">

                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre">
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea type="text" name="descripcion" id="descripcion" class="form-control" aria-describedby="help_descripcion"></textarea>
                                <small id="help_descripcion" class="text-muted">Debe ser la descripción completa</small>
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="number" name="precio" id="precio" min="0" class="form-control" id="precio">

                            </div>


                            <div class="form-group">
                                <label for="number">Tipo de Producto</label>
                                <select name="tipo_productos_id" id="tipo_producto_id" class="form-control w-100">
                                    @foreach($tipoProductos as $tipoProducto)
                                        <option value="{{ $tipoProducto->id }}">{{ $tipoProducto->nombre }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mb-5">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

