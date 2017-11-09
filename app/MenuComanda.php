<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuComanda extends Model
{
  protected $table = 'menu_comnada';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'comentario', 'id_menu', 'id_comanda',
  ];

  public function comanda() {
    return $this->belongsTo(Comanda::class, 'id_comanda');
  }
  public function menu() {
    return $this->belongsTo(Menu::class, 'id_menu');
  }

  public function agregados_menu_comanda() {
    return $this->hasMany(AgregadoMenuComanda::class, 'id');
  }

}
