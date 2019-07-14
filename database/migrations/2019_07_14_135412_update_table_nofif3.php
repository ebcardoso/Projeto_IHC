<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableNofif3 extends Migration {
    public function up() {
        Schema::table('notificacao', function (Blueprint $table) {
            $table->integer('id_meta')->nullable();
        });
    }

    public function down() {
        
    }
}
