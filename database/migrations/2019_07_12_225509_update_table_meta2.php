<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableMeta2 extends Migration {
    public function up() {
        Schema::table('meta', function (Blueprint $table) {
            $table->integer('a_perder')->nullable();
            $table->integer('tipo')->nullable();
        });
    }

    public function down() {
        
    }
}
