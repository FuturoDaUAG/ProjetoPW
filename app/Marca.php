<?php

namespace web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marca extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $table = 'marcas';
    protected $fillable = ['descricao'];
    
    public function patrimonio(){
        return $this->hasMany('\web\Patrimonio');
    }
}
