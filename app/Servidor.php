<?php

namespace web;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{

    protected $fillable = [
        'nome','cargo','matricula', 'usuario_id'
    ];

    public function usuario()
    {
        return $this->hasOne('web\Usuario');
    }


}
