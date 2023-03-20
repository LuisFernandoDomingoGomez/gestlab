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
        Schema::create('especimenes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('clave_obra', 255)->nullable();
            //Para ser llenado por el laboratorista
            $table->string('numero_olla', 255)->nullable();
            $table->string('numero_remision', 255)->nullable();
            $table->string('numero_muestra', 255)->nullable();
            $table->string('numero_molde', 255)->nullable();
            $table->string('numero_cilindro', 255)->nullable();
            $table->text('ejes', 255)->nullable();

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
        Schema::dropIfExists('especimenes');
    }
};
