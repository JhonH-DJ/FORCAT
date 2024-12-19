<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Creación de la tabla 'producto'
        Schema::create('producto', function (Blueprint $table) {
            $table->id(); // Clave primaria auto incrementable
            $table->string('Nombre', 100); // Nombre del producto
            $table->text('Descripcion')->nullable(); // Descripción opcional
            $table->decimal('Precio', 10, 2); // Precio con dos decimales
            $table->integer('Stock'); // Cantidad en stock
            $table->unsignedBigInteger('id_categoria')->nullable(); // Relación con la tabla 'categorias'
            $table->string('imagen_URL')->nullable(); // URL de la imagen del producto
            $table->string('Tipo', 50)->nullable(); // Tipo de producto (opcional)

            // Clave foránea para asociar 'producto' con 'categorias'
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('set null'); 

            $table->timestamps(); // Para registrar created_at y updated_at
        });

        // Aseguramos que la tabla 'detalle_pedido' tenga claves foráneas correctamente
        Schema::table('detalle_pedido', function (Blueprint $table) {
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('producto')->onDelete('cascade');
            $table->unsignedBigInteger('id_pedido');
            $table->foreign('id_pedido')->references('id')->on('pedido')->onDelete('cascade');
        });

        // Aseguramos que la tabla 'pedido' tenga claves foráneas correctamente
        Schema::table('pedido', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        // Eliminar claves foráneas en la tabla 'detalle_pedido'
        Schema::table('detalle_pedido', function (Blueprint $table) {
            $table->dropForeign(['id_pedido']); // Elimina la clave foránea de 'id_pedido'
            $table->dropForeign(['id_producto']); // Elimina la clave foránea de 'id_producto'
        });

        // Eliminar claves foráneas en la tabla 'pedido'
        Schema::table('pedido', function (Blueprint $table) {
            $table->dropForeign(['id_cliente']); // Elimina la clave foránea de 'id_cliente'
        });

        // Eliminar la tabla 'producto'
        Schema::dropIfExists('producto');
    }
};
