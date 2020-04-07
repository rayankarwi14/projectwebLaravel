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
    return view('welcome');
})->name("acc");

Route::get('/product_list', 'ControllerProduit@index')->name("product");

Route::get('/blog', function () {
    return view('blog');
})->name("blog");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/card', function () {
    return view('card');
})->name("card");

Route::get('/checkout', function () {
    return view('checkout');
})->name("checkout");

Route::get('/blog/blog_single', function () {
    return view('blog_single');
})->name("blog_single");

Route::get('/product_list/product_detail', function () {
    return view('product_detail');
})->name("product_detail");

