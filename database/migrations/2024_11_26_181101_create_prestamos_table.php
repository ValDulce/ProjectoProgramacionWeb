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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->date('fechaPrestamo');
            $table->date('fechaEntrega');
            $table->unsignedBigInteger('usuario');
            $table->unsignedBigInteger('libro');
            $table->enum('estatus', ['completo', 'incompleto']);
            $table->timestamps();

            $table->foreign('usuario')->references('id')->on('usuarios')->onDelete('restrict');
            $table->foreign('libro')->references('id')->on('libros')->onDelete('restrict');
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
