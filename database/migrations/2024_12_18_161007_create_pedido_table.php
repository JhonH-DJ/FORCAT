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
            // 'id_pedido' será la clave primaria y se incrementará automáticamente
            $table->bigIncrements('id_pedido');  
            
            // 'Estado' con los posibles valores de estado del pedido
            $table->enum('Estado', ['pendiente', 'procesado', 'entregado'])->default('pendiente');
            
            // 'Total' para el monto total del pedido
            $table->decimal('Total', 10, 2);
            
            // 'id_usuario' con clave foránea a la tabla 'usuarios'
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('set null');
            
            // 'id_cliente' con clave foránea a la tabla 'clientes'
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('set null');
            
            // Dirección opcional para entrega
            $table->string('Dirección', 100)->nullable();
            
            // 'Tipo_comprobante' para especificar el tipo de comprobante (boleta o factura)
            $table->enum('Tipo_comprobante', ['boleta', 'factura']);
            
            // Tiempos de creación y actualización de los pedidos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar las claves foráneas antes de eliminar la tabla
        Schema::table('pedido', function (Blueprint $table) {
            $table->dropForeign(['id_usuario']);
            $table->dropForeign(['id_cliente']);
        });

        // Eliminar la tabla 'pedido'
        Schema::dropIfExists('pedido');
    }
};
