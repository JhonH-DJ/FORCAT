<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\RegistrarController;
use Illuminate\Contracts\Routing\Registrar;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::controller(RegistrarController::class)->group(function () {
    Route::get('registrar', 'Registrar')->name('registrar');
    Route:: post('registrar','registrarSave')->name('registrar.save');
});

Route::controller(ClienteController::class)->prefix('Clientes')->group(function () {
    Route::get('', 'index')->name('clientes.index');
    Route::get('crear', 'create')->name('clientes.create');
    Route::post('guardar', 'store')->name('clientes.store');
});

Route::controller(ProductoController::class)->prefix('Productos')->group(function () {
    Route::get('', 'index')->name('productos.index');
    Route::get('crear', 'create')->name('productos.create');
    Route::post('guardar', 'store')->name('productos.store');
});

Route::controller(VentasController::class)->prefix('Ventas')->group(function () {
    Route::get('', 'index')->name('ventas.index');
    Route::get('crear', 'create')->name('ventas.create');
    Route::post('guardar', 'store')->name('ventas.store');
});

Route::controller(PedidoController::class)->prefix('Pedidos')->group(function () {
    Route::get('', 'index')->name('pedidos.index');
    Route::get('crear', 'create')->name('pedidos.create');
    Route::post('guardar', 'store')->name('pedidos.store');
});
