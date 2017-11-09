<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agregado extends Model
{
  protected $table = 'agregado';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'descripcion', 'id_tipo_agregado',
  ];
  
  public function tipo_agregado() {
    return $this->belongsTo(TipoAgregado::class, 'id_tipo_agregado');
  }

}
