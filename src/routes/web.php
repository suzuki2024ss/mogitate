<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::get('/products', [ProductsController::class, 'index']);


Route::get('/products/search', [ProductsController::class, 'search']);


Route::get('/products/register', [ProductsController::class, 'register']);


Route::get('/products/{productId}', [ProductsController::class, 'productId']);


Route::get('/products/{productId}/update', [ProductsController::class, 'update']);


Route::get('/products/{productId}/delete', [ProductsController::class, 'delate']);
