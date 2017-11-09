<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregadoMenuComanda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('agregado_menu_comnada', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('id_agregado')->unsigned();
            $table->foreign('id_agregado')->references('id')->on('agregado');
            $table->integer('id_menu_comanda')->unsigned();
            $table->foreign('id_menu_comanda')->references('id')->on('menu_comnada');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
