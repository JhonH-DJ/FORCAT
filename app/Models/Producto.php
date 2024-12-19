<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Especificar el nombre correcto de la tabla
    protected $table = 'producto';  // Tabla singular, como en tu base de datos

    // Si la tabla no tiene los campos 'created_at' y 'updated_at', debes agregar esta línea
    // public $timestamps = false; // Si no los tienes, descomenta esta línea

    // Los campos que son asignables masivamente
    protected $fillable = ['Nombre', 'Descripcion', 'Precio', 'Stock', 'id_categoria', 'imagen_URL', 'Tipo'];
}
