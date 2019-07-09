<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PesoTable extends Migration {
    public function up() {
        Schema::create('peso', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('precovarejo',9,2)->nullable();
            $table->integer('id_user')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    public function down() {
        Schema::dropIfExists('peso');
    }
}