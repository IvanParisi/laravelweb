<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\Galeria;
use Illuminate\Support\Facades\File;
use App\Http\Requests\GaleriaRequest;

class GaleriaController extends Controller
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
    public function index()
    {
        if(auth()->user()->name === "Admin"):
        $fotos = Galeria::all();
        else:
        $id = auth()->user()->id;
        $fotos = Galeria::all()->where("user_id", $id );
        endif;
        return view("web.tusfotos",compact('fotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("web.cargarfoto");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleriaRequest $request)
    {
        $id = auth()->user()->id;
        $datos = $request->all();
        $datos["user_id"] = $id;

        if($request->hasFile('imagen')):
            $imagen = $request->file('imagen');
            $nombre = $datos["nombre"] . "." . $request->imagen->extension();
            $destino = public_path('/img');
            $imagen->move($destino,$nombre);
            $datos["imagen"] =  "img/$nombre";
        endif;
        if(Galeria::create($datos)):
            return redirect()->route("web.galeria")->with("ok","Foto cargada con exito");
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
       $foto = Galeria::find($id);
       return view("web.cargarfoto",compact("foto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GaleriaRequest $request, $id)
    {
        $foto = Galeria::find($id);
        $id = auth()->user()->id;
        $datos = $request->all();
        $datos["user_id"] = $id;
        if($request->hasFile('imagen')):
            $imagen = $request->file('imagen');
            $nombre = $datos["nombre"] . "." . $request->imagen->extension();
            $destino = public_path('/img');
            $imagen->move($destino,$nombre);
            $datos["imagen"] =  "img/$nombre";
        endif;
        if($foto->update($datos)):
            return redirect()->route("cargarfoto.index")->with("ok","Se modifico correctamente");
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
       $img = Galeria::find($id)->img;
        File::delete($img);
        Galeria::destroy($id);
        return redirect()->route("cargarfoto.index")->with('ok','Foto eliminada con exito!');
    }
}
