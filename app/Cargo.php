<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
  protected $table = 'cargo';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'descripcion',
  ];
  

  public function empleados() {
    return $this->hasMany(Empleado::class, 'id_empleado');
  }

}
