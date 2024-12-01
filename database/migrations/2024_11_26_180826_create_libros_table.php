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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',50);
            $table->date('año');
            $table->unsignedBigInteger('autor');
            $table->unsignedBigInteger('categoria');
            $table->unsignedBigInteger('editorial');
            $table->timestamps();
            /**
     * RESTRICCIONES
     */
            $table->foreign('autor')->references('id')->on('autors')->onDelete('restrict');
            $table->foreign('categoria')->references('id')->on('categorias')->onDelete('restrict');
            $table->foreign('editorial')->references('id')->on('editorials')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
