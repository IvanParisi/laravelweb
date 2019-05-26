<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
   protected $table = "tipo_productos";
   protected $fillable = ["nombre"];
   public function Productos()
   {
    return $this->hasMany(Producto::class,"tipo_habitacion_id");
   }
}
