@extends('layouts.app')
@section('title', 'Lista de Ventas')
@section('contents')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <table class="table table-bordered table-striped table-sm">
                <thead class="table-primary text-center">
                    <tr>
                        <th>ID Venta</th>
                        <th>Método de Pago</th>
                        <th>Fecha de Venta</th>
                        <th>Estado de Venta</th>
                        <th>ID Pedido</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ventas as $venta)
                        <tr>
                            <td>{{ $venta->id_venta }}</td>
                            <td>{{ ucfirst($venta->metodo_pago) }}</td>
                            <td>{{ $venta->Fecha_venta }}</td>
                            <td>
                                @if ($venta->Estado_venta === 'pendiente')
                                    <span class="badge bg-warning text-dark">{{ ucfirst($venta->Estado_venta) }}</span>
                                @elseif ($venta->Estado_venta === 'pagado')
                                    <span class="badge bg-success">{{ ucfirst($venta->Estado_venta) }}</span>
                                @else
                                    <span class="badge bg-danger">{{ ucfirst($venta->Estado_venta) }}</span>
                                @endif
                            </td>
                            <td>{{ $venta->id_pedido }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No hay ventas registradas</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
