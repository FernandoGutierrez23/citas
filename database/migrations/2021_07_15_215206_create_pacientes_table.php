<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     * Esta sección se creó para agregar los datos de los pacientes
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
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
            //Datos clínicos
            $table->text('descripcion');
            
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
        Schema::dropIfExists('pacientes');
    }
}
