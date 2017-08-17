<?php
namespace web;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public function servidor()
    {
        return $this->hasOne('web\Servidor');
    }


    protected $table ='usuarios';
    
    protected $fillable = ['apelido','email','senha'];


    public function departamento() {
        return $this->belongsTo('web\Departamento');
    }
     
}
