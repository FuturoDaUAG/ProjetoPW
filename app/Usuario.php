<?php

namespace web;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

 protected $table ='usuarios';
    
    protected $fillable = ['apelido','email','senha','departamento_id'];

public function departamento() {
        return $this->hasMany('web\Departamento');   
   }
     
}
