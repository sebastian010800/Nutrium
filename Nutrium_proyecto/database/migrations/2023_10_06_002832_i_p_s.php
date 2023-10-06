<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IPS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ips', function (Blueprint $table) {
            $table->id(); // Campo ID autoincremental
            $table->string('nombre_ips');
            $table->string('telefono_ips');
            $table->string('direccion_ips');
            $table->string('correo_electronico_ips')->unique(); // Campo de correo electrónico único
            $table->timestamps(); // Campos de fecha de creación y actualización
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
        Schema::dropIfExists('ips');
    }
}
