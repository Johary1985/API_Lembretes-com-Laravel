<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembretesTable extends Migration {

    /* Schema da BD feita em PostgreSql */

    public function up() {
        
        Schema::create('lembretes', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('titulo');
            $table->string('descricao');
            $table->integer('repetir');
            $table->softDeletes();
            $table->timestamps();
            $table->dateTime('data_evento');
            $table->boolean('cerrar_evento');
        });
    }

    
    public function down() {

        Schema::dropIfExists('lembretes');
    }
}
