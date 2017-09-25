<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = 'empresa';
  
  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre', 'email', 'descripcion', 'web', 'telefono', 'id_user',
  ];

  public function usuario() {
    return $this->belongsTo(User::class, 'id_user');
  }
  
  public function propiedades() {
    return $this->hasMany(Propiedad::class, 'id_empresa');
  }

}
