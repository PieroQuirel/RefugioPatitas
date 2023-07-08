<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detalles_compra', function (Blueprint $table) {
            $table->id('detalles_compra_id');

            $table->unsignedBigInteger('producto');
            $table->foreign('producto')
                  ->references('producto_id')
                  ->on('productos');

            $table->integer('cantidad');
            $table->decimal('descuento',6,2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detalles_compra');
    }
};