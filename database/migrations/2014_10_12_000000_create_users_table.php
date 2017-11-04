<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('primerapelldio');
            $table->string('segundoapellido');
            $table->integer('telefonoResidencial');
            $table->integer('telefonoCelular');
            $table->string('direccion');
            $table->string('tipoUsuario');
            $table->string('nombreUsuario');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
