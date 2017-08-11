<?php


namespace App;
namespace web;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table ='departamentos';
    
    protected $fillable = ['departamento'];

public function usuario() {
      return $this->belongsTo('web\Usuario');   
   }
   
}
