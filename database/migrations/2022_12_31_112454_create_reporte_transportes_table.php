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
        Schema::create('reporte_transportes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            //Programacion de recoleccion
            $table->date('fecha_programacion_recoleccion')->nullable();
            $table->string('responsable_recoleccion', 255)->nullable();
            $table->string('obra', 255)->nullable();
            $table->time('hora_salida')->nullable();
            $table->time('hora_llegada')->nullable();
            $table->string('condiciones_transportacion', 255)->nullable();

            //Entrega al Laboratorio
            $table->date('fecha_entrega_laboratorio')->nullable();
            $table->string('responsable_recepcion', 255)->nullable();
            $table->text('observaciones_generales', 255)->nullable();

            //Almacenaje
            $table->date('fecha_almacenaje')->nullable();
            $table->string('responsable_almacenaje', 255)->nullable();
            $table->text('indicaciones_especiales_almacenaje', 255)->nullable();

            //Para ser llenado por el laboratorista
            

            //Manipulacion de las muestras
            $table->string('entrega_transportista', 255)->nullable();
            $table->string('muestreador', 255)->nullable();
            $table->string('transportista_1', 255)->nullable();

            $table->string('entrega_laboratorista', 255)->nullable();
            $table->string('transportista_2', 255)->nullable();
            $table->string('laboratorista', 255)->nullable();


            //Firmas 
            $table->text('desviaciones_exclusiones', 255)->nullable();
            $table->string('nombre_firma_revision', 255)->nullable();
            $table->string('nombre_firma_encargado', 255)->nullable();
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
        Schema::dropIfExists('reporte_transportes');
    }
};
