<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_servicios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            //Programacion del Servicio
            $table->string('cliente', 255)->nullable();
            $table->string('atencion_a', 255)->nullable();
            $table->string('obra', 255)->nullable();
            $table->string('ubicacion', 255)->nullable();
            $table->string('clave_obra', 255)->nullable();
            $table->string('orden_servicio', 255)->nullable();
            $table->date('fecha_muestreo')->nullable();
            $table->string('muestreador_asignado', 255)->nullable();

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
        Schema::dropIfExists('orden_servicios');
    }
};
