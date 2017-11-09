<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  protected $table = 'menu';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'descripcion', 'id_acompannamiento',
  ];

  public function menu_comandas() {
    return $this->hasMany(MenuComanda::class, 'id_menu_comanda');
  }

  public function acompannamiento() {
    return $this->belongsTo(Acompannamiento::class, 'id_acompannamiento');
  }

}
