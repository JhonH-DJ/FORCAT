<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla si no sigue la convención de nombres
    protected $table = 'pedidos';

    // Especifica los campos que pueden ser asignados de manera masiva
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'categoria',
        'imagen',
        'tipo',
    ];

    // Opcional: Definir relaciones, por ejemplo, si tienes una relación con Categoría
    // public function categoria()
    // {
    //     return $this->belongsTo(Categoria::class, 'categoria', 'id');
    // }
}
