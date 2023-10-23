<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Adt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adt', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_accidente');
            $table->time('hora_accidente');
            $table->text('descripcion_accidente');
            $table->string('calificacion_accidente');
            $table->unsignedBigInteger('localidad_accidente'); // Llave foránea a la tabla localidad
            $table->unsignedBigInteger('user_id'); // Llave foránea a la tabla users
            $table->timestamps();

            // Definir relaciones de llave foránea
            $table->foreign('localidad_accidente')->references('id')->on('localidad');
            $table->foreign('user_id')->references('id')->on('users');
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('adt');
    }
}
