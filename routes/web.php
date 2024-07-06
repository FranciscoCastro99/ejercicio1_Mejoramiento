<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//CRUD de Clientes

Route::get('cliente/listar',[ClientController::class,'index'])->name('client.index');
Route::get('cliente/create',[ClientController::class,'create'])->name('client.create');
Route::post('cliente/store',[ClientController::class,'store'])->name('client.store');
Route::get('cliente/{clients}',[ClientController::class,'show'])->name('client.show');
Route::put('cliente/{clients}',[ClientController::class,'update'])->name('client.update');
Route::delete('cliente/{clients}',[ClientController::class,'destroy'])->name('client.destroy');
Route::get('cliente/{clients}/editar',[ClientController::class,'edit'])->name('client.edit');

