<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class WebController extends Controller
{
    public function index()
    {
        return view("web.index");
    }
    public function contacto()
    {
        return view("web.contacto");
    }
    public function galeria()
    {
        return view("web.galeria");
    }
    public function productos()
    {
        $productos = Producto::all()->groupBy("tipoProducto.nombre");
        return view("web.productos", compact("productos"));
    }
}
