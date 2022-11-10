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
            $table->string('cliente', 255)->nullable();
            $table->string('atencion_a', 255)->nullable();
            $table->string('obra', 255)->nullable();
            $table->string('ubicación', 255)->nullable();
            $table->string('clave_obra', 255)->nullable();
            $table->string('orden_servicio', 255)->nullable();
            $table->date('fecha_muestreo')->nullable();
            $table->string('muestreador_asignado', 255)->nullable();

            //Caracteristicas del concreto solicitado
            $table->string('resistencia', 255)->nullable();
            $table->string('tipo_aditivo', 255)->nullable();
            $table->string('tamano_agregado_maximo', 255)->nullable();
            $table->string('tipo_agregado', 255)->nullable();
            $table->string('premezcadora', 255)->nullable();
            $table->string('edad_ensayo', 255)->nullable();
            //Modulo de ruptura
            $table->string('revenimiento', 255)->nullable();
            $table->string('tipo_cemento', 255)->nullable();
            $table->string('dosificacion', 255)->nullable();
            $table->string('marca_cemento', 255)->nullable();
            $table->string('volumen_colado', 255)->nullable();

            //Para ser llenado por el laboratorista
            $table->string('numero_olla', 255)->nullable();
            $table->string('numero_remision', 255)->nullable();
            $table->time('hora_salida_planta')->nullable();
            $table->time('hora_entrega_obra')->nullable();
            $table->time('hora_toma_muestra')->nullable();
            $table->string('temperatura_ambiental_muestra', 255)->nullable();
            $table->time('hora_termino_descarga')->nullable();
            $table->string('volumen_m3', 255)->nullable();
            $table->string('uno_cm', 255)->nullable();
            $table->string('tiempo_empleado', 255)->nullable();
            $table->string('dos_cm', 255)->nullable();
            $table->string('numero_muestra', 255)->nullable();
            $table->string('numero_molde', 255)->nullable();
            $table->string('elemento', 255)->nullable();
            $table->string('nivel', 255)->nullable();
            $table->string('ejes', 255)->nullable();
            //Manipulacion de las muestras
            $table->time('hora_llegada_muestreador')->nullable();
            $table->string('entrega_transportista', 255)->nullable();
            $table->string('muestreador', 255)->nullable();
            $table->string('transportista_1', 255)->nullable();

            $table->time('hora_salida_muestreador')->nullable();
            $table->string('entrega_laboratorista', 255)->nullable();
            $table->string('transportista_2', 255)->nullable();
            $table->string('laboratorista', 255)->nullable();
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
