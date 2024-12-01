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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
        $table->string('nombre', 50)->nullable(false);
        $table->string('apellidoPat', 40)->nullable(false);
        $table->string('apellidoMat', 40)->nullable(); 
        $table->string('telefono', 15)->nullable(false)->unique(); // Obligatorio y único
        $table->string('direccion', 250)->nullable(false); 
        $table->char('sexo'); //, 1 ->nullable(false); // Solo puede contener 1 carácter (M o F)
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
