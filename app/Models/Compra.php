<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = "compras";
    protected $fillable = ["fecha","cantidad_de_productos","productos_id","clientes_id"];

    protected function Producto(){
        return $this->belongsTo(Producto::class,"productos_id");
    }

    protected function Cliente(){
        return $this->belongsTo(Cliente::class,"clientes_id");

    }
}
