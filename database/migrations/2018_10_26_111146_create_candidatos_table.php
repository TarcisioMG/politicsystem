<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_completo');
            $table->string('nome_exibicao');
            $table->string('foto');
            $table->integer('id_partido')->unsigned();
            $table->foreign('id_partido')->references('id')->on('partidos');
            $table->string('numero_candidato')->unique();
            $table->string('endereco');
            $table->integer('votos')->default('0');
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
        Schema::dropIfExists('candidatos');
    }
}
