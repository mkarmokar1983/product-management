<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('/products', [ProductController::class, 'productList'])->name('products.index');
Route::get('/products/create',[ProductController::class, 'createProduct'])->name('product.create');
Route::post('/products', [ProductController::class, 'storeProduct'])->name('product.store');
Route::get('/products/{id}', [ProductController::class, 'showProduct'])->name('product.show');
Route::get('/products/{id}/edit',[ProductController::class, 'editProduct'])->name('product.edit');
Route::put('/products/{id}', [ProductController::class, 'updateProduct'])->name('product.update');
Route::delete('/products/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');