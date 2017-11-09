<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UserTableSeeder::class);
      $this->call(tipo_agregadoseeder::class);
      $this->call(acompannamientoseeder::class);
      $this->call(menuseeder::class);
      $this->call(agregadoseeder::class);
      $this->call(mesaseeder::class);
      $this->call(cargoseeder::class);
      $this->call(empleadoseeder::class);
    }
}
