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
        Schema::create('informe_ensayos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');

            //Datos de recoleccion
            $table->string('numero_informe', 255)->nullable();
            $table->string('obra', 255)->nullable();
            $table->string('ubicacion', 255)->nullable();
            $table->string('propietario', 255)->nullable();
            $table->string('supervicion', 255)->nullable();
            $table->date('fecha_elaboracion')->nullable();
            $table->string('localizacion', 255)->nullable();
            $table->string('remision', 255)->nullable();
            $table->string('rev_proyecto', 255)->nullable();
            $table->string('rev_medido', 255)->nullable();
            $table->string('numero_olla', 255)->nullable();
            $table->string('numero_remision', 255)->nullable();
            $table->date('fecha_ensaye')->nullable();
            $table->time('hora_salida')->nullable();
            $table->time('hora_llegada')->nullable();
            $table->float('mpa_7', 255)->nullable();
            $table->float('mpa_14', 255)->nullable();
            $table->float('mpa_28', 255)->nullable();
            $table->float('kgf_7', 255)->nullable();
            $table->float('kgf_14', 255)->nullable();
            $table->float('kgf_28', 255)->nullable();

            //Datos de concreto
            $table->string('tipo_cemento', 255)->nullable();
            $table->string('temperatura_concreto', 255)->nullable();
            $table->string('carga', 255)->nullable();
            $table->string('fc1', 255)->nullable();
            $table->string('fc2', 255)->nullable();
            $table->string('agregado_maximo', 255)->nullable();
            $table->string('volumen_colado', 255)->nullable();
            $table->string('concretera', 255)->nullable();


            $table->string('observaciones', 255)->nullable();
            $table->string('muestreo_nombre', 255)->nullable();
            $table->string('elaboro_nombre', 255)->nullable();
            $table->string('ensayo_rev_nombre', 255)->nullable();
            $table->string('cabeceo_nombre', 255)->nullable();
            $table->string('ensayo_esp_nombre', 255)->nullable();
            $table->string('reviso_nombre', 255)->nullable();

            $table->string('firma_recibido_cliente', 255)->nullable();

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
        Schema::dropIfExists('informe_ensayos');
    }
};
