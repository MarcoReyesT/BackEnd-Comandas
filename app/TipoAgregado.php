<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAgregado extends Model
{
  protected $table = 'tipoagregado';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'descripcion',
  ];

  public function agregados() {
    return $this->hasMany(Agregado::class, 'id_agregado');
  }

}
