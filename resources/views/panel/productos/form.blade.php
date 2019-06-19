@extends('panel.template')

@section('contenido')
    <div class="container">



        <div class="row mt-5">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 class="h3">Nuevo producto</h1>
                <div class="row">

                    <div class="col-6 offset-3">
                        @if(isset($producto))
                        <form action="{{  route("productos.update",$producto->id)}}" enctype="multipart/form-data" method="POST" class="bg-light p-3">
                            @method("PUT")
                         @else
                                <form action="{{ route("productos.store") }}" enctype="multipart/form-data" method="POST" class="bg-light p-3">
                          @endif
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre" value="{{ isset($producto) ? $producto->nombre : old('nombre') }}" minlength="5">
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea type="text" name="descripcion" id="descripcion" class="form-control" aria-describedby="help_descripcion" maxlength="250">{{ isset($producto) ? $producto->descripcion : old('descripcion') }}</textarea>
                                <small id="help_descripcion" class="text-muted">Debe ser la descripción completa</small>
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="number" name="precio" min="100" class="form-control" id="precio" value="{{ isset($producto) ? $producto->precio : old('precio') }}">

                            </div>
                                    <div class="form-group">
                                        <label for="stock">Stock</label>
                                        <input type="number" name="stock"  min="100" class="form-control" id="stock" value="{{ isset($producto) ? $producto->stock : old('stock') }}">

                                    </div>

                            @isset($producto)
                            <div class="form-group">
                                <p>Imagen</p>
                                <img src="{{ $producto->imagen }}" alt="" width="120">
                            </div>
                            @endisset

                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" accept="image/jpeg,image/png" class="form-control-file" name="imagen" id="imagen" placeholder="" aria-describedby="help_imagen">
                                <small id="help_imagen" class="form-text text-muted">La imágen del producto debe ser en formato jpg</small>
                            </div>

                            <div class="form-group">
                                <label for="number">Tipo de Producto</label>
                                <select name="tipo_productos_id" id="tipo_producto_id" class="form-control w-100">
                                    <option value="0">Selecciones un tipo</option>
                                    @foreach($tipoProductos as $tipoProducto)
                                        <option @if( (isset($producto) && $producto->tipo_productos_id == $tipoProducto->id) || (old("tipo_producto_id") == $tipoProducto->id)) selected @endif value="{{ $tipoProducto->id }}">{{ $tipoProducto->nombre }}</option>
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

