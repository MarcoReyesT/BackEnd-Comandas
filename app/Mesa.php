<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
  protected $table = 'mesa';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nro_mesa',
  ];

  public function comandas() {
    return $this->hasMany(Comanda::class, 'id_comanda');
  }

}
