<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgregadoMenuComanda extends Model
{
  protected $table = 'agregado_menu_comnada';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'cantidad', 'id_agregado', 'id_menu_comanda',
  ];

  public function agregado() {
    return $this->belongsTo(Agregado::class, 'id_agregado');
  }

  public function menu_comanda() {
    return $this->belongsTo(MenuComanda::class, 'id_menu_comanda');
  }

}
