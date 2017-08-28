<?php

namespace web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use web\Sala;

class Predio extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $fillable = ['descricao'];

    
    public function salas()
    {
        return $this->hasMany('web\Sala');   
    }

}
