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
        Schema::create('img_categorias', function (Blueprint $table) {
            $table->unsignedBigInteger('imagenes_id');
            $table->unsignedBigInteger('categorias_id')->nullable();

            $table->foreign('imagenes_id')->references('id')->on('imagenes')->onDelete('cascade');
            $table->foreign('categorias_id')->references('id')->on('categoria_fotos')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('img_categorias');
    }
};
