<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Método para mostrar la lista de productos
    public function index()
    {
        // Obtiene todos los productos de la base de datos
        $productos = Producto::all();
        
        // Pasa los productos a la vista 'Products.index'
        return view('Products.index', compact('productos'));
    }

    // Método para mostrar el formulario de creación de producto
    public function create()
    {
        // No es necesario pasar categorías si no trabajas con claves foráneas
        return view('Products.create');
    }

    // Método para almacenar un nuevo producto
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'Nombre' => 'required|max:100',
            'Descripcion' => 'nullable|string',
            'Precio' => 'required|numeric',
            'Stock' => 'required|integer',
            'id_categoria' => 'nullable|integer',
            'imagen_URL' => 'nullable|string',
            'Tipo' => 'nullable|string|max:50',
        ]);

        // Crea un nuevo producto
        Producto::create($request->only([
            'Nombre', 'Descripcion', 'Precio', 'Stock', 'id_categoria', 'imagen_URL', 'Tipo'
        ]));

        // Redirige al listado de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito');
    }
}
