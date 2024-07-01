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
        Schema::create('cuerpos_dictamenes', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('cuerpos_id');
            $table->unsignedBigInteger('dictamenes_id')->nullable();

            $table->string('rutapdf')->nullable();

            $table->foreign('cuerpos_id')->references('id')->on('cuerpos')->onDelete('cascade');
            $table->foreign('dictamenes_id')->references('id')->on('dictamenes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuerpos_dictamenes');
    }
};
