<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
  protected $table = 'empleado';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'rut', 'id_cargo',
  ];
  
  public function cargo() {
    return $this->belongsTo(Cargo::class, 'id_cargo');
  }

  public function comandas() {
    return $this->hasMany(Comanda::class, 'id_comanda');
  }

}
