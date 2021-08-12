<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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


Route::get('/products/{category}/{id}', [ProductController::class, 'category'])->name('category');


Route::resource('/products', ProductController::class);




Route::get('/contact', function () {
    return view('contact');
});


Route::get('/basket', function () {
    return view('basket');
});

Route::get('/product/{id}', function () { /*to use controller */
    return view('product');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

