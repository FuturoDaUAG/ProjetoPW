<?php

namespace web;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{

    protected $fillable = [
        'nome','cargo','matricula', 'usuario_id'
    ];

    protected $table ='servidors';

    public function usuario()
    {
        return $this->belongsTo('web\Usuario');
    }


}
