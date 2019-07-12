<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMeta extends Migration {
    public function up() {
        Schema::create('meta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->nullable();
            $table->string('descricao')->nullable();
            $table->integer('dias')->nullable();
            $table->integer('dias_passados')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('meta');
    }
}
