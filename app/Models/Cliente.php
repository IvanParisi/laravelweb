<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = ["nombre","apellido","email","telefono","dni"];

    public function getFullNameAttribute()
    {
        return $this->attributes["nombre"] . " " . $this->attributes["apellido"];
    }

    public function Compra(){
        return $this->belongsToMany(Producto::class,"compras","productos_id","clientes_id")->withPivot("fecha","cantidad_de_productos");

    }










}
