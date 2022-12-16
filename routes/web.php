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
    return  view('home');
})->name('home');

Route::get('/blog', function () {
    return  view('blog');
})->name('blog');

Route::get('/products', function () {
    return  view('products');
})->name('products');

// una rota per ogni, il name prova.contatti

// Route::get('/contatti', function () {
//     return '<h1>Hello World</h1>';
// });
