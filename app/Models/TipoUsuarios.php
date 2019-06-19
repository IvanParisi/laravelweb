<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuarios extends Model
{
    protected $table = "tipo_usuarios";
    protected $fillable = ["name,display_name"];

    public function usuarios()
    {
        return $this->hasMany(User::class,'tipo_id');
    }
}
