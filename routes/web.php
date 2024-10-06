<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\HTTP\Controllers\CartController;

Route::get('/', function (){
    return view('welcome');
});
//should display products
Route::get('/products', [ProductController::class, 'show']);
//Route to add products to cart
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
//route to view the cart
Route::get('/cart', CartController::class, 'viewCart'])->name('cart.view');
