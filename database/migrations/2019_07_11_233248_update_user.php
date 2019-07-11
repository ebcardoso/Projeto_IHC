<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUser extends Migration {
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('calorias_cafe')->nullable();
            $table->integer('calorias_almoco')->nullable();
            $table->integer('calorias_janta')->nullable();
        });
    }

    public function down() {
        
    }
}
