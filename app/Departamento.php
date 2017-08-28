<?php


namespace web;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $table ='departamentos';
    
    protected $fillable = ['departamento'];

public function usuarios() {
      return $this->hasMany('web\Usuario');
   }
   
}
