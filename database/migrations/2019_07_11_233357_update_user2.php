<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUser2 extends Migration {
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('preencheu_dieta')->nullable();
        });
    }

    public function down() {
        
    }
}
