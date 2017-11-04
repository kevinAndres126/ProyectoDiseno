<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegranteGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integranteGrupo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_persona')->unsigned();
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id')->on('grupo');
            $table->foreign('id_persona')->references('id')->on('users');
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
        Schema::dropIfExists('integranteGrupo');
    }
}
