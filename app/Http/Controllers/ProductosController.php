<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;
use App\Http\Requests\EditarRequest;
use App\Http\Requests\ProductosRequest;

class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Producto $producto)
    {
        $productos = $producto->all();

        return view('panel.productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TipoProducto $tipoProducto)
    {
        $tipoProductos = $tipoProducto->all();

        return view("panel.productos.form",compact("tipoProductos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProductosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductosRequest $request)
    {
        $datos = $request->all();
        if($request->hasFile('imagen')):
            $imagen = $request->file('imagen');
            $nombre = $datos["nombre"] . "." . $request->imagen->extension();
            $destino = public_path('/img');
            $imagen->move($destino,$nombre);
            $datos["imagen"] =  "img/$nombre";
        endif;
        if(Producto::create($datos)):
            return redirect()->route("productos.index")->with("ok","Producto creado con exito");
        else:
            return redirect()->back()->withInput()->withErrors("No se pudo cargar");
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $tipoProductos = TipoProducto::all();
       $producto = Producto::find($id);

        return view("panel.productos.form",compact("producto","tipoProductos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EditarRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarRequest $request, $id)
    {
        $producto = Producto::find($id);
        $datos = $request->all();
        if($request->hasFile('imagen')):
            $imagen = $request->file('imagen');
            $nombre = $datos["nombre"] . "." . $request->imagen->extension();
            $destino = public_path('/img');
            $imagen->move($destino,$nombre);
            $datos["imagen"] =  "img/$nombre";
        endif;
        if($producto->update($datos)):
            return redirect()->route("productos.index")->with("ok","Se modifico correctamente");
        else:
            return redirect()->back()->withInput()->withErrors("Error al editar");
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    Producto::destroy($id);
    return redirect()->route("productos.index")->with('ok','Producto eliminado con exito');
}
}
