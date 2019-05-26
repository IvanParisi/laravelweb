<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $fillable = ["nombre","imagen","descripcion","precio","tipo_productos_id"];

    public function TipoProducto()
    {
        return $this->belongsTo(TipoProducto::class);
    }
}
