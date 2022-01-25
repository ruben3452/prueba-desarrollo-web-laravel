<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SalesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tienda', [ProductsController::class, 'index'])->name('products');


Route::post('/tienda', ProductsController::class . '@store')->name('products');

Route::get('/tienda/{id}', [ProductsController::class, 'show'])->name('products-edit');

Route::patch('/tienda/{id}', [ProductsController::class, 'update'])->name('products-update');

Route::delete('/tienda/{id}', [ProductsController::class, 'destroy'])->name('products-destroy');




Route::get('/usuario', [CustomersController::class, 'index'])->name('customers');

Route::post('/usuario', CustomersController::class . '@store')->name('customers');

Route::get('/usuario/{id}', [CustomersController::class, 'show'])->name('customers-edit');

Route::patch('/usuario/{id}', [CustomersController::class, 'update'])->name('customers-update');

Route::delete('/usuario/{id}', [CustomersController::class, 'destroy'])->name('customers-destroy');


Route::get('/sale', [SalesController::class, 'index'])->name('sales');

Route::post('/sale', SalesController::class . '@store')->name('sales');