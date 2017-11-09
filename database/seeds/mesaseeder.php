<?php

use Illuminate\Database\Seeder;

class mesaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('mesa')->insert([
      'id' => 1,
  		'nro_mesa' => '1',
    
      ]);
    }
}
