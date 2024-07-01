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
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id('id');
            $table->string('rutaimg')->nullable();
            $table->text('descripcion');
            $table->timestamps();

            //$table->unsignedBigInteger('cuerpos_id');
            $table->foreignId('cuerpos_id')->references('id')->on('cuerpos')->onDelete('cascade');
            $table->foreignId('categoriasft_id')->references('id')->on('categoria_fotos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenes');
    }
};
