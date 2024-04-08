<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


//Pantalla de Inicio

Route::get('/', function () {
    return view('nav');
})->name('nav');




// app productos

//Lectura de productos

Route::get('/products', [ProductController::class, 'index'])->name('products.index');//primer parametro es Ruta, segundo controlador al que llama, 

//y name() es el nombre alternativo que le podemos poner a la llamada del constrolador desde la vista


//Crear de productos

Route::post('/products/create', [ProductController::class, 'store'])->name('products.store');//Post envia datos (formulario)
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');//Get muestra pagina

//borrado de productos

Route::post('/products/delete', [ProductController::class, 'delete'])->name('products.delete');


//busqueda de un producto

Route::get('/products/show', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/show', [ProductController::class, 'show'])->name('products.show');

//Update de producto

Route::get('/products/update', [ProductController::class, 'selectUpdate'])->name('products.modifica');
Route::post('/products/update', [ProductController::class, 'selectUpdate'])->name('products.modifica');

Route::post('/products', [ProductController::class, 'update'])->name('products.update');
