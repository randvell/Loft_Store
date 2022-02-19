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
require __DIR__ . '/auth.php';

Route::get('/', \App\Http\Controllers\HomeController::class . '@index')->name('home');
Route::get('/home', \App\Http\Controllers\HomeController::class . '@index')->name('home');

Route::get('/category/{category}', \App\Http\Controllers\CategoryController::class . '@show')->name('category');

Route::get('/product/{product}', \App\Http\Controllers\ProductController::class . '@show')->name('product');

// todo: админские роуты
