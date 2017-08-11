<?php

namespace App;

namespace web;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

    //
    protected $table = 'usuarios';
    protected $fillable = ['apelido', 'email', 'senha'];

    public function departamentos() {
        return $this->hasMany('web\Departamento');
    }

}
