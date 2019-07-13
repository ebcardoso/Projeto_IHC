<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExerciciovinculo extends Migration {
    public function up() {
        Schema::create('exerciciovinculo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_exercicio')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('dia')->nullable();
            $table->integer('ativo')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('exerciciovinculo');
    }
}
