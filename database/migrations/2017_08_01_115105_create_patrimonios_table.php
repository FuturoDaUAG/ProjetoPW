<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marca_id')->unsigned();
            $table->integer('grupo_id')->unsigned();
            $table->integer('subgrupo_id')->unsigned();
            $table->string('descricao');
            $table->integer('valor');
            $table->integer('numeroempenho');
            $table->integer('numeropatrimonio');
            $table->integer('numeropregao');
            $table->integer('numeropantigo');
            $table->integer('numeronotafiscal');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('subgrupo_id')->references('id')->on('subgrupos');
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
        Schema::dropIfExists('patrimonios');
    }
}
