<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTable extends Migration {
    public function up() {
        Schema::create('grupo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->integer('ativo')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('grupo');
    }
}
