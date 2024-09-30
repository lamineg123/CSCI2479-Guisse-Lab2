<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function (){
    return view('welcome');
});
//should display products
Route::get('/products', [ProductController::class, 'show']);
