<?php


namespace web;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public function servidor()
    {
        return $this->belongsTo('web\Servidor');
    }


    protected $table ='usuarios';
    
    protected $fillable = ['apelido','email','senha'];

}
