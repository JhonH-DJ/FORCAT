<!-- resources/views/Pedidos/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedido</title>

    <!-- Agregar Bootstrap desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Formulario de Pedido</h1>

        <!-- Mensajes de error y éxito (si existen) -->
        @include('partials.errors') <!-- Para mostrar errores -->
        @include('partials.success') <!-- Para mostrar mensajes de éxito -->

        <!-- Formulario -->
        <form action="{{ route('pedidos.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
            @csrf

            <!-- Campo Nombre del Cliente -->
            <div class="mb-3">
                <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente" placeholder="Nombre del Cliente" value="{{ old('nombre_cliente') }}" required>
            </div>

            <!-- Campo Dirección -->
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección de Envío" value="{{ old('direccion') }}" required>
            </div>

            <!-- Campo Tipo de Comprobante -->
            <div class="mb-3">
                <label for="tipo_comprobante" class="form-label">Tipo de Comprobante</label>
                <select class="form-select" name="tipo_comprobante" id="tipo_comprobante" required>
                    <option value="boleta" {{ old('tipo_comprobante') == 'boleta' ? 'selected' : '' }}>Boleta</option>
                    <option value="factura" {{ old('tipo_comprobante') == 'factura' ? 'selected' : '' }}>Factura</option>
                </select>
            </div>

            <!-- Campo Total -->
            <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="number" class="form-control" name="total" id="total" placeholder="Total del Pedido" value="{{ old('total') }}" required>
            </div>

            <!-- Botón de Enviar -->
            <button type="submit" class="btn btn-primary w-100">Guardar</button>
        </form>
    </div>

    <!-- Agregar los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
