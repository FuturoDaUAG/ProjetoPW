<?php

namespace web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'nome'
    ];

    public function setor()
    {
        return $this->hasMany('web\Setor');
    }


}
