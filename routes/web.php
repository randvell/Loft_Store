<?php

use Illuminate\Http\Request;
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

Route::post('/product/buy', \App\Http\Controllers\ProductController::class . '@buy')->name('product.buy');
Route::get('/product/{id}', \App\Http\Controllers\ProductController::class . '@show')->name('product');


Route::get('/orders', \App\Http\Controllers\OrderController::class . '@index')->name('orders');
Route::get('/order/{id}', \App\Http\Controllers\OrderController::class . '@show')->name('order');

Route::group(['middleware' => \App\Http\Middleware\AdminMiddleware::class], function () {
    Route::get('/admin/categories', \App\Http\Controllers\Admin\CategoryController::class . '@index')->name('admin.category.list');
    Route::get('/admin/category/edit/{category}', \App\Http\Controllers\Admin\CategoryController::class . '@edit')->name('admin.category.edit');

    Route::get('/admin/category/create', \App\Http\Controllers\Admin\CategoryController::class . '@create')->name('admin.category.create');
    Route::post('/admin/category/create', \App\Http\Controllers\Admin\CategoryController::class . '@create')->name('admin.category.create');

    Route::post('/admin/category/update/{category}', \App\Http\Controllers\Admin\CategoryController::class . '@update')->name('admin.category.update');
    Route::get('/admin/category/delete/{category}', \App\Http\Controllers\Admin\CategoryController::class . '@destroy')->name('admin.category.delete');

    Route::get('/admin/products', \App\Http\Controllers\Admin\ProductController::class . '@index')->name('admin.product.list');
    Route::get('/admin/product/edit/{product}', \App\Http\Controllers\Admin\ProductController::class . '@edit')->name('admin.product.edit');

    Route::get('/admin/product/create', \App\Http\Controllers\Admin\ProductController::class . '@create')->name('admin.product.create');
    Route::post('/admin/product/create', \App\Http\Controllers\Admin\ProductController::class . '@create')->name('admin.product.create');

    Route::post('/admin/product/update/{product}', \App\Http\Controllers\Admin\ProductController::class . '@update')->name('admin.product.update');
    Route::get('/admin/product/delete/{product}', \App\Http\Controllers\Admin\ProductController::class . '@destroy')->name('admin.product.delete');
});

