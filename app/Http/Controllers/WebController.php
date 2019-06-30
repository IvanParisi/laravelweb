<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Galeria;
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
        $galeria = Galeria::all();
        return view("web.galeria",compact('galeria'));
    }
    public function productos()
    {
        $productos = Producto::all()->groupBy("tipoProducto.nombre");
        return view("web.productos", compact("productos"));
    }

    public function register()
    {
        return view ("web.register");
    }

    public function login()
    {
        return view ("web.login");
    }

    public function cargar()
    {
        return view ("web.cargarfoto");
    }

}
