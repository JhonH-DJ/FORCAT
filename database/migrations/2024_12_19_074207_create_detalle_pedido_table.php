<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidoTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->id('id_detalle'); // Clave primaria
            $table->unsignedBigInteger('id_pedido'); // Clave foránea hacia la tabla pedido
            $table->unsignedBigInteger('id_producto'); // Clave foránea hacia la tabla producto
            $table->integer('cantidad'); // Nombre de la columna con "C" en minúscula
            $table->decimal('subtotal', 10, 2); // Subtotal con formato de dos decimales
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('id_pedido')->references('id_pedido')->on('pedido')->onDelete('cascade');
            $table->foreign('id_producto')->references('id_producto')->on('producto')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_pedido');
    }
}
