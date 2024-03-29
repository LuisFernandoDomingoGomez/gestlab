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
        Schema::create('registro_cilindros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');

            //Datos de recoleccion
            $table->string('orden_laboratorio', 255)->nullable();
            $table->string('cliente', 255)->nullable();
            $table->string('obra', 255)->nullable();
            $table->date('fecha_muestreo')->nullable();
            $table->string('tipo_concreto', 255)->nullable();
            $table->string('fcproy', 255)->nullable();
            $table->string('rev_obt', 255)->nullable();
            $table->text('ejes', 255)->nullable();
            $table->time('hora_inicio_cabeceo')->nullable();
            $table->time('hora_final_cabeceo')->nullable();
            $table->time('hora_inicio_ensayo')->nullable();
            $table->time('hora_final_ensayo')->nullable();
            $table->string('prensa')->nullable();
            $table->string('regla')->nullable();
            $table->string('bascula')->nullable();
            $table->string('termometro')->nullable();
            $table->string('temperatura_ambiental', 255)->nullable();

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
        Schema::dropIfExists('registro_cilindros');
    }
};
