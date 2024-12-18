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
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('id_producto', true);
            $table->string('Nombre', 100);
            $table->text('Descripcion')->nullable();
            $table->decimal('Precio', 10);
            $table->integer('Stock');
            $table->integer('id_categoria')->nullable()->index('id_categoria');
            $table->string('imagen_URL')->nullable();
            $table->string('Tipo', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
