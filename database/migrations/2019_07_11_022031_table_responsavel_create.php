<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableEventoCreate extends Migration {
    public function up() {
        Schema::create('responsavel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_membro')->nullable();
            $table->integer('id_responsavel')->nullable();
            $table->integer('ativo')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('responsavel');
    }
}
