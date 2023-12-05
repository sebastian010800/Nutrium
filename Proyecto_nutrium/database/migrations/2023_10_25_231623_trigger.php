<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared('
            CREATE TRIGGER crear_registro_datos
            AFTER INSERT ON users
            FOR EACH ROW
            BEGIN
                INSERT INTO datos (user_id)
                VALUES (NEW.id);
            END
        ');
        DB::unprepared('
            CREATE TRIGGER crear_registro_causas
            AFTER INSERT ON adt
            FOR EACH ROW
            BEGIN
                INSERT INTO causas (Causas_basicas, Causas_inmediatas, adt_id)
                VALUES ("ValorPorDefecto", "ValorPorDefecto", NEW.id);
            END
        ');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::unprepared('DROP TRIGGER IF EXISTS crear_registro_datos');
        DB::unprepared('DROP TRIGGER IF EXISTS crear_registro_causas');
    }
}
