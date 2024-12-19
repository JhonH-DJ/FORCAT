<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    // Mostrar la lista de pedidos
    public function index()
    {
        return view('Pedidos.index'); 
    }

    // Mostrar el formulario para crear un nuevo pedido
    public function create()
    {
        return view('Pedidos.create'); 
    }

    // Guardar el nuevo pedido en la base de datos
    public function store(Request $request)
    {
        // Validar los datos del pedido
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000',
        ]);

        // Crear el nuevo pedido
        Pedido::create([
            'nombre_cliente' => $request->nombre_cliente,
            'descripcion' => $request->descripcion,
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->route('pedidos.index')->with('success', 'Pedido creado correctamente.');
    }
}
