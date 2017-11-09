<?php

use Illuminate\Database\Seeder;

class cargoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cargo')->insert([
  		'id' => 1,
  		'nombre' => 'Administrador',
      'descripcion' => 'Administrador del local, para relaizar analisis de los datos',
  		]);
    \DB::table('cargo')->insert([
      'id' => 2,
  		'nombre' => 'Garzon',
      'descripcion' => 'Persona dedicada a atender las mesas',
      ]);
     \DB::table('cargo')->insert([
      'id' => 3,
  		'nombre' => 'Cocinero',
      'descripcion' => 'Persona dedicada a preparar comida',
      ]);
    }
}
