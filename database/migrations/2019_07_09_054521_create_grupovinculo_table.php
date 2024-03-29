<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupovinculoTable extends Migration {
    public function up() {
        Schema::create('grupovinculo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_grupo')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('ativo')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('grupovinculo');
    }
}
