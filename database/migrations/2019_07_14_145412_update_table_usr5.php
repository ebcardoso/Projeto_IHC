<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableUsr5 extends Migration {
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nome_responsavel2')->nullable();
        });
    }

    public function down() {
        
    }
}
