<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            //Datos del paciente
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->integer('edad');
            //Datos de contacto
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('telefono');
            //Datos de cita
            $table->date('date_cita');
            $table->time('hora');
            $table->text('motivo');

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
        Schema::dropIfExists('citas');
    }
}
