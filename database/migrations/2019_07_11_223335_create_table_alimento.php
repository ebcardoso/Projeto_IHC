<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlimento extends Migration {
    public function up() {
        Schema::create('alimento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->string('porcao')->nullable();
            $table->integer('calorias')->nullable();
            $table->integer('tipo')->nullable(); //1-Cafe | 2-Almoço | 3-Janta
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('alimento');
    }
}
