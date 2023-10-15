<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ADT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ADT', function (Blueprint $table) {
            $table->id(); // Id del accidente (automático)
            $table->date('fecha_accidente');
            $table->time('hora_accidente');
            $table->text('descripcion_accidente')->nullable();
            $table->integer('calificacion_accidente')->nullable();
            $table->unsignedBigInteger('id_localidad'); // Clave foránea
            $table->foreign('id_localidad')->references('id_localidad')->on('localidad');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
