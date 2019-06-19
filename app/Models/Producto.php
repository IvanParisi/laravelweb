<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $fillable = ["nombre","descripcion","precio","imagen","stock","tipo_productos_id"];

    public function TipoProducto()
    {
        return $this->belongsTo(TipoProducto::class,"tipo_productos_id");
    }

    public function Compras(){
        return $this->belongsToMany(Cliente::class,"compras","productos_id","clientes_id");
    }

}
