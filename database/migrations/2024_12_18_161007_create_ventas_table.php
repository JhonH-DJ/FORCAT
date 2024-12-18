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
        Schema::create('ventas', function (Blueprint $table) {
            $table->integer('id_venta', true);
            $table->enum('metodo_pago', ['efectivo', 'tarjeta', 'transferencia']);
            $table->date('Fecha_venta');
            $table->enum('Estado_venta', ['pendiente', 'pagado', 'cancelado']);
            $table->integer('id_pedido')->nullable()->index('id_pedido');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
