<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descricao');
            $table->integer('sala_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->integer('servidor_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('sala_id')->references('id')->on('salas');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('servidor_id')->references('id')->on('servidors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setors');
    }
}
