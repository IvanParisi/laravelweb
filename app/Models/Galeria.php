<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = 'galeria';
    protected $fillable = ["nombre","imagen","descripcion","user_id"];

    public function User()
    {
        return $this->hasOne(User::class,'id');
    }


}
