<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
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
Route::get('cliente/{clients}/editar',[ClientController::class,'edit'])->name('client.edit');

Route::delete('cliente/{clients}',[ClientController::class,'destroy'])->name('client.destroy');



//Crud de project
Route::get('project/listar',[ProjectController::class, 'index'])->name('project.index');
Route::get('project/create',[ProjectController::class,'create'])->name('project.create');
Route::post('project/store',[ProjectController::class,'store'])->name('project.store');
Route::get('project/{projects}',[ProjectController::class,'show'])->name('project.show');
Route::get('project/{projects}/editar',[ProjectController::class,'edit'])->name('project.edit');
Route::put('project/{projects}',[ProjectController::class,'update'])->name('project.update');

Route::delete('project/{projects}',[ProjectController::class,'destroy'])->name('project.destroy');
