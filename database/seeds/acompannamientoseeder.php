<?php

use Illuminate\Database\Seeder;

class acompannamientoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('acompannamiento')->insert([
      'id' => 1,
  		'nombre' => 'pure',
      'descripcion' => 'pure clasico de papas',
      'precio' => 1200,
      ]);
          \DB::table('acompannamiento')->insert([
      'id' => 2,
  		'nombre' => 'arroz',
      'descripcion' => 'arroz blanco',
      'precio' => 1200,
      ]);
        \DB::table('acompannamiento')->insert([
      'id' => 3,
  		'nombre' => 'arroz primavera',
      'descripcion' => 'arroz con verduras',
      'precio' => 1200,
      ]);
         \DB::table('acompannamiento')->insert([
      'id' => 4,
  		'nombre' => 'papas al hilo',
      'descripcion' => 'papas firtas delgadas',
      'precio' => 1200,
      ]);
          \DB::table('acompannamiento')->insert([
      'id' => 5,
  		'nombre' => 'papas brabas',
      'descripcion' => 'papas rusticas con crema y merken',
      'precio' => 1200,
      ]);
           \DB::table('acompannamiento')->insert([
      'id' => 6,
  		'nombre' => 'pure de champiñones',
      'descripcion' => 'pure de champiñones',
      'precio' => 1200,
      ]);

    }
}
