<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Investigadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('investigacion_accidente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_investigador');
            $table->string('tipo_investigador');
            $table->string('numero_licencia')->unique();
            $table->string('aplica_cargo');
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
        Schema::dropIfExists('investigacion_accidente');
    }
}
