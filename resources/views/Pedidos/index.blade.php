@extends('layouts.app')
@section('title', 'Lista de Pedidos')
@section('contents')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <table class="table table-bordered table-striped table-sm">
                <thead class="table-primary text-center">
                    <tr>
                        <th>ID</th>
                        <th>Estado</th>
                        <th>Total</th>
                        <th>ID Usuario</th>
                        <th>ID Cliente</th>
                        <th>Dirección</th>
                        <th>Tipo Comprobante</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
