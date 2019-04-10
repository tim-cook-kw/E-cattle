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
Route::get('/product_name', function () {
    return view('product_info');
});
Route::get('/product', function () {
    return view('products');
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('login','loginController@getlogin')->name('signin');
Route::post('login','loginController@postlogin')->name('postsigin');
Route::resource('register', 'UserController');
Route::resource('checkout', 'CheckoutController');