<?php

use Illuminate\Database\Seeder;

class tipo_agregadoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               \DB::table('tipo_agregado')->insert([
      'id' => 1,
  		'nombre' => 'agregados alimentos',
      'descripcion' => 'alimentos varios',
    
      ]);
              \DB::table('tipo_agregado')->insert([
      'id' => 2,
  		'nombre' => 'bebidas',
      'descripcion' => 'bebidas de fantacia y alcoholicas',
    
      ]);
    }
}
