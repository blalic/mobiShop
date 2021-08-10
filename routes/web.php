<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('/products', function () {
    return view('products');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/basket', function () {
    return view('basket');
});

Route::get('/product/{id}', function () { /*to use controller */
    return view('product');
});


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

