<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuerpos', function (Blueprint $table) {
            $table->id('id');
            $table->string('CI');
            $table->string('identificado');
            $table->string('nombre');
            $table->string('apellidop');
            $table->string('apellidom');
            $table->integer('edad');
            $table->integer('edad2')->nullable();
            $table->string('sexo');
            $table->string('fecha');
            $table->text('causa_muerte');
            $table->text('ubicacion');
            $table->string('imgprincipal');
            $table->timestamps('');

            //$table->unsignedBigInteger('carpetaInv_id');
            //$table->foreignId('carpetaInv_id')->references('id')->on('carpetas_de_investigacion');
            
            //$table->unsignedBigInteger('tiposdehechos_id');
            $table->foreignId('tiposdehechos_id')->references('id')->on('tipos_de_hechos')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuerpos');


    }
};
