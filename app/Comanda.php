<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
  protected $table = 'comanda';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'entregado', 'fecha', 'hora', 'id_empleado', 'id_venta', 'id_mesa',
  ];

  public function menu_comandas() {
    return $this->hasMany(MenuComanda::class, 'id');
  }
  public function empleado() {
    return $this->belongsTo(Empleado::class, 'id_empleado');
  }
  public function venta() {
    return $this->belongsTo(Venta::class, 'id_venta');
  }
  public function mesa() {
    return $this->belongsTo(Mesa::class, 'id_mesa');
  }

}