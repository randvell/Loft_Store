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

Route::get('/product/{id}', \App\Http\Controllers\ProductController::class . '@show')->name('product');
Route::post('/product/buy', \App\Http\Controllers\ProductController::class . '@buy')->name('product.buy');

//Route::post('/product/buy', function (Request $request) {
//    (new \App\Http\Controllers\ProductController())->buy($request);
//    return \Illuminate\Support\Facades\Redirect::to(route('orders'));
//})->name('product.buy');

Route::get('/orders', \App\Http\Controllers\OrderController::class . '@index')->name('orders');
Route::get('/order/{id}', \App\Http\Controllers\OrderController::class . '@show')->name('order');

Route::group(['middleware' => \App\Http\Middleware\AdminMiddleware::class], function () {
    Route::get('/admin/categories', 'AdminController@categories')->name('admin.categories');
    Route::get('/admin/products', 'AdminController@products')->name('admin.products');
});

