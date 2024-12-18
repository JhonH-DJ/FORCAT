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
        Schema::create('pedido', function (Blueprint $table) {
            $table->integer('id_pedido', true);
            $table->enum('Estado', ['pendiente', 'procesado', 'entregado']);
            $table->decimal('Total', 10);
            $table->integer('id_usuario')->nullable()->index('id_usuario');
            $table->integer('id_cliente')->nullable()->index('id_cliente');
            $table->string('Dirección', 100)->nullable();
            $table->enum('Tipo_comprobante', ['boleta', 'factura']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
