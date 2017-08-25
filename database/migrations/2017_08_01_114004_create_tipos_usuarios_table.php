<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposusuarios', function (Blueprint $table) {
		$table->increments('id');
                $table->string("tipousuario");
                $table->integer('modulo_id')->unsigned();
                $table->foreign('modulo_id')->references('id')->on('modulos');
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
	Schema::dropIfExists('tiposusuarios');
    }
}
