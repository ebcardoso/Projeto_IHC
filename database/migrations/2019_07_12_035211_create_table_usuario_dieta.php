<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarioDieta extends Migration {
    public function up() {
        Schema::create('usuariodieta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alimento')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('ativo')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('usuariodieta');
    }
}
