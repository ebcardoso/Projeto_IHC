<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExercicio extends Migration {
    public function up() {
        Schema::create('exercicio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->integer('calorias')->nullable();
            $table->integer('tipo')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('exercicio');
    }
}
