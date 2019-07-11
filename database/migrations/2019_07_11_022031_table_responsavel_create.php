<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableResponsavelCreate extends Migration {
    public function up() {
        Schema::create('responsavel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_membro')->nullable();
            $table->integer('id_responsavel')->nullable();
            $table->integer('notif_via')->nullable(); //0-Push | 1-Ligação | 2-SMS | 3-Whatsapp
            $table->integer('frequencia')->nullable(); //1-3em3 | 1-4em4 | 2-6em6 | 3-12em12
            $table->integer('ativo')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('responsavel');
    }
}
