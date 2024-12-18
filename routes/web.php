<?php

use App\Http\Controllers\ClienteController;
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

Route:: controller(ClienteController::class)->prefix('Clients')->group(function(){
    Route::get('','index')->name('Lista');
    
});
