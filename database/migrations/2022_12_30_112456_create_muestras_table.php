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
        Schema::create('muestras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('clave_obra', 255)->nullable();
            //Para ser llenado por el laboratorista
            $table->string('numero_olla', 255)->nullable();
            $table->string('numero_remision', 255)->nullable();
            $table->time('hora_salida_planta')->nullable();
            $table->time('hora_entrega_obra')->nullable();
            $table->time('hora_toma_muestra')->nullable();
            $table->string('temperatura_ambiental_muestra', 255)->nullable();
            $table->string('hora_termino_descarga', 255)->nullable();
            $table->string('volumen_m3', 255)->nullable();
            $table->string('uno_cm', 255)->nullable();
            $table->string('tiempo_empleado', 255)->nullable();
            $table->string('dos_cm', 255)->nullable();
            $table->string('numero_muestra', 255)->nullable();
            $table->string('numero_molde', 255)->nullable();
            $table->string('elemento', 255)->nullable();
            $table->string('nivel', 255)->nullable();
            $table->string('ejes', 255)->nullable();

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
        Schema::dropIfExists('muestras');
    }
};
