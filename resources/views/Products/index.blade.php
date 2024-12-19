@extends('layouts.app')
@section('title', 'Lista de Productos')
@section('contents')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h2>Lista de Productos</h2>

            <!-- Mensaje de éxito -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Tabla de productos -->
            <table class="table table-bordered table-striped table-sm">
                <thead class="table-primary text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>ID Categoría</th>
                        <th>Imagen</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto->id_producto }}</td>
                            <td>{{ $producto->Nombre }}</td>
                            <td>{{ $producto->Descripcion }}</td>
                            <td>{{ $producto->Precio }}</td>
                            <td>{{ $producto->Stock }}</td>
                            <td>{{ $producto->id_categoria }}</td>
                            <td><img src="{{ $producto->imagen_URL }}" alt="{{ $producto->Nombre }}" width="100"></td>
                            <td>{{ $producto->Tipo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
