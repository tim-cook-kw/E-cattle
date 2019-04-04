<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/product_name', function () {
    return view('product_info');
});
Route::get('/product', function () {
    return view('products');
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('/login', function () {
    return view('login');
});
