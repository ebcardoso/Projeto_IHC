<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableMeta extends Migration {
    public function up() {
        Schema::table('meta', function (Blueprint $table) {
            $table->string('recompensa')->nullable();
            $table->integer('status')->nullable(); //0-Em Andamento | 1-Em Avaliação | 2-Aprovada | 3-Recusada
        });
    }

    public function down() {
        
    }
}