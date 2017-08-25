<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoUsuarioUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipousuariousuario', function (Blueprint $table) {
		$table->increments('id');
                $table->integer('tipousuario_id')->unsigned();
                $table->integer('usuario_id')->unsigned();
                $table->foreign('tipousuario_id')->references('id')->on('tiposusuarios');
                $table->foreign('usuario_id')->references('id')->on('usuarios');
		$table->timestamps();
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipousuariousuario');
    }
}
