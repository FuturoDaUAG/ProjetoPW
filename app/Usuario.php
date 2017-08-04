<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function servidor()
    {
        return $this->belongsTo('App\Servidor');
    }
}
