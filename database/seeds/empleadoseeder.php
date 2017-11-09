<?php

use Illuminate\Database\Seeder;

class empleadoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               \DB::table('empleado')->insert([
      'id' => 1,
  		'nombre' => 'Fernando Torres',
      'rut' => '1234567895',
      'id_cargo' => '1'
    
      ]);
                       \DB::table('empleado')->insert([
      'id' => 2,
  		'nombre' => 'Camila Hernandez',
      'rut' => '1834562895',
      'id_cargo' => '2'
    
      ]);
			        \DB::table('empleado')->insert([
      'id' => 3,
  		'nombre' => 'Fabian Guzman',
      'rut' => '1394535295',
      'id_cargo' => '2'
    
      ]);
			        \DB::table('empleado')->insert([
      'id' => 4,
  		'nombre' => 'Ximena Fernandez',
      'rut' => '1534567895',
      'id_cargo' => '1'
    
      ]);        






    }

}
