<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Valoracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoracion', function (Blueprint $table) {
            $table->id();
            $table->string('valoracion_primaria');
            $table->string('valoracion_secundaria');     
            $table->unsignedBigInteger('investigador_id')->nullable();
            $table->unsignedBigInteger('adt_id')->nullable();
            // Definición de claves foráneas
            $table->foreign('investigador_id')->references('id')->on('investigacion_accidente');
            $table->foreign('adt_id')->references('id')->on('adt');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('valoracion');
    }
}
