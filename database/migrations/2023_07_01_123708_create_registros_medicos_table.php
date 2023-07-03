<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('registros_medicos', function (Blueprint $table) {
            $table->id('registro_id');

            $table->unsignedBigInteger('mascota')->unique();
            $table->foreign('mascota')
                  ->references('mascota_id')
                  ->on('mascotas');

            $table->unsignedBigInteger('veterinario')->unique();
            $table->foreign('veterinario')
                  ->references('id')
                  ->on('users');
                  
            $table->string('vacunas',250)->nullable();
            $table->string('enfermedades',250)->nullable();
            $table->string('tratamientos',250)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registros_medicos');
    }
};