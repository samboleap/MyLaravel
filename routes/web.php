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
});

// routes/web.php or routes//api.php

Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/product/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/product/store', 'App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('/product/{id}/edit', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
Route::get('/product/{id}/show', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::put('/product/{id}/update', 'App\Http\Controllers\ProductController@update')->name('product.update');
Route::delete('/product/{id}/delete', 'App\Http\Controllers\ProductController@destroy')->name('product.destroy');