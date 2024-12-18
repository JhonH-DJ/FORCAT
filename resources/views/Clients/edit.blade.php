
@extends('layouts.app')

@section('title','Editar Clientes')

@section('contents')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-body">
                    <form action="/ruta-para-guardar-cliente" method="POST">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control border-2" id="nombre" name="nombre"  required>
                        </div>

                        <!-- Apellido Paterno -->
                        <div class="mb-3">
                            <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control border-2" id="apellido_paterno" name="apellido_paterno"  required>
                        </div>

                        <!-- Apellido Materno -->
                        <div class="mb-3">
                            <label for="apellido_materno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control border-2" id="apellido_materno" name="apellido_materno">
                        </div>

                        <!-- Teléfono -->
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control border-2" id="telefono" name="telefono" >
                        </div>

                        <!-- Dirección -->
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control border-2" id="direccion" name="direccion" >
                        </div>

                        <!-- Fecha de Registro -->
                        <div class="mb-3">
                            <label for="fecha_registro" class="form-label">Fecha de Registro</label>
                            <input type="date" class="form-control border-2" id="fecha_registro" name="fecha_registro">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control border-2" id="email" name="email"  required>
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Editar Cliente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

