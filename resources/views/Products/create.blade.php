@extends('layouts.app')

@section('title', 'Crear Producto')

@section('contents')
    <div class="container mt-5">
        <h3>Registrar Producto</h3>
        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombre" name="Nombre" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="Descripcion"></textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="Precio" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="Stock" required>
            </div>

            <div class="mb-3">
                <label for="categoria" class="form-label">ID Categoría</label>
                <input type="number" class="form-control" id="categoria" name="id_categoria">
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen del Producto</label>
                <input type="file" class="form-control" id="imagen" name="imagen_URL">
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="Tipo">
            </div>

            <button type="submit" class="btn btn-primary">Registrar Producto</button>
        </form>
    </div>
@endsection
