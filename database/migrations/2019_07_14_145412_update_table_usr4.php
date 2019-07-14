<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableUsr4 extends Migration {
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('nome_responsavel')->nullable();
        });

        Schema::table('meta', function (Blueprint $table) {
            $table->integer('votos_sim')->nullable();
            $table->integer('votos_nao')->nullable();
        });
    }

    public function down() {
        
    }
}
