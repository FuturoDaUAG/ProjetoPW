<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    public function usuario()
    {
        return $this->hasOne('App\Usuario');
    }
}
