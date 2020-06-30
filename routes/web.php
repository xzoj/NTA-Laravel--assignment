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
Route::get('/trangchu','ProductController@home');
Route::get('/details/{id}','ProductController@details')->name('detail');
Route::get('/products','ProductController@Index');
Route::get('/products-create','ProductController@Create');
Route::post('/products-create','ProductController@Store')->name('productstore');
//Route::get('/products/{product}','ProductController@Show');
Route::get('/product-edit/{id}','ProductController@Edit');
Route::get('/product-update','ProductController@Update')->name('product.update');
Route::get('/product-delete/{id}','ProductController@Destroy');
