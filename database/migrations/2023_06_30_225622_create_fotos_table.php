<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->id('foto_id');
            $table->unsignedBigInteger('mascota')->unsigned();
            $table->foreign('mascota')
                  ->references('mascota_id')
                  ->on('mascotas');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('fotos');
    }
};
