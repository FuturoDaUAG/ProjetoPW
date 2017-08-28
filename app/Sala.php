<?php

namespace web;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sala extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'descricao', 'ramal', 'predio_id'
    ];

    public function setores()
    {
        return $this->hasMany('web\Setor');
    }
    
    public function predio()
    {
        return $this->belongsTo('web\Predio');
    }
}
