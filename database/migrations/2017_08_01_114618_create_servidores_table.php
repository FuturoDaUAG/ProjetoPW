<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servidores', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome');
          $table->string('cargo');
          $table->string('matricula');
          $table->integer('usuario_id')->unsigned();
          $table->timestamps();
          $table->foreign('usuario_id')->references('id')->on('usuarios');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servidores');
    }
}
