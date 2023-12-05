<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Causas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('causas', function (Blueprint $table) {
            $table->id();
            $table->string('Causas_basicas')->nullable();
            $table->string('Causas_inmediatas')->nullable();
            $table->unsignedBigInteger('adt_id');
            $table->foreign('adt_id')->references('id')->on('adt');
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
        Schema::dropIfExists('causas');
    }
}
