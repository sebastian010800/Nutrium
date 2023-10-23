<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Traslado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traslado', function (Blueprint $table) {
            $table->id();
            $table->time('hora_traslado');
            $table->date('fecha_traslado');
            $table->string('placa_ambulancia');
            $table->string('nombre_paramedicos');
            $table->unsignedBigInteger('ips_id');
            $table->unsignedBigInteger('adt_id');
            
            $table->foreign('ips_id')->references('id')->on('ips');
            $table->foreign('adt_id')->references('id')->on('adt');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('traslado');
    }
}
