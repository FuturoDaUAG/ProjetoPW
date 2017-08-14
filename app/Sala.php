<?php

namespace web;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['descricao','ramal','predio_id'];
    
    public function predio() {
        return $this->belongsTo('web\Predio');   
    }
}
