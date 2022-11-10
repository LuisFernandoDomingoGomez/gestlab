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
        Schema::create('reporte_muestreos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            //Programacion del Servicio
            $table->string('cliente');
            $table->string('atencion_a');
            $table->string('obra');
            $table->string('ubicación');
            $table->string('clave_obra');
            $table->string('orden_servicio');
            $table->date('fecha_muestreo');
            $table->string('muestreador_asignado');
            //Caracteristicas del concreto solicitado

            //Para ser llenado por el laboratorista
            $table->string('numero_olla');
            $table->string('numero_remision');
            $table->time('hora_salida_planta');
            $table->time('hora_entrega_obra');
            $table->time('hora_toma_muestra');
            $table->string('temperatura_ambiental_muestra');
            $table->time('hora_termino_descarga');
            $table->string('volumen_m3');
            $table->string('uno_cm');
            $table->string('tiempo_empleado');
            $table->string('dos_cm');
            $table->string('numero_muestra');
            $table->string('numero_molde');
            $table->string('elemento');
            $table->string('nivel');
            $table->string('ejes');
            //Manipulacion de las muestras
            $table->time('hora_llegada_muestreador');
            $table->string('entrega_transportista');
            $table->string('muestreador');
            $table->string('transportista_1');

            $table->time('hora_salida_muestreador');
            $table->string('entrega_laboratorista');
            $table->string('transportista_2');
            $table->string('laboratorista');
            //Observaciones del Laboratorio
            $table->enum('condicion_ambiental_muestreo', ['vientos fuertes','lluvia', 'ninguna que afecte']);
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
        Schema::dropIfExists('reporte_muestreos');
    }
};
