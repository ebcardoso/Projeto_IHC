<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notificacao extends Migration {

    public function up() {
        Schema::create('notificacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descri')->nullable();
            $table->integer('id_origem')->nullable();
            $table->integer('id_destino')->nullable();
            $table->integer('id_grupo')->nullable();
            $table->integer('ativo')->nullable();
            $table->integer('tipo')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('notificacao');
    }
}