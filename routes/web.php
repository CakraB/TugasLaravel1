<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', 'ProductController@index'); //buat baca dari Controller 

Route::post('/product', 'ProductController@store')->name('product.store'); //buat masukin data dari Controller

Route::get('/products', 'ProductController@getProducts')->name('product.list');

Route::delete('/product/{id}', 'ProductController@delete')->name('product.delete');

Route::get('/product/{id}' , 'ProductController@edit')->name('product.edit');

Route::patch('/product/{id}', 'ProductController@update')->name('product.update');
