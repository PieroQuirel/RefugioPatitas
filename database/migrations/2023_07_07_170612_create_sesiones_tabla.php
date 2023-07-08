<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sesiones', function (Blueprint $table) {
            $table->id('sesion_id');

            $table->unsignedBigInteger('adoptante');
            $table->foreign('adoptante')
                  ->references('id')
                  ->on('users');
            
            $table->unsignedBigInteger('registro');
            $table->foreign('registro')
                  ->references('registro_id')
                  ->on('registros_medicos');    
            
            $table->integer('año');
            $table->integer('semana_cita');
            $table->integer('dia_cita');
            $table->string('hora_cita');
            $table->enum('asistencia',['si','no','pe']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sesiones');
    }
};