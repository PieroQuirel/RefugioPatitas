<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id('respuesta_id');
            $table->unsignedBigInteger('solicitud')->unsigned();
            $table->foreign('solicitud')
                  ->references('solicitud_id')
                  ->on('solicitudes');
            $table->string('pregunta',200);
            $table->mediumText('respuesta');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('respuestas');
    }
};