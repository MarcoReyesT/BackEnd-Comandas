<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acompannamiento extends Model
{
  protected $table = 'acompannamiento';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'descripcion',
  ];
  
  public function menus() {
    return $this->hasMany(Menu::class, 'id_menu');
  }

}
