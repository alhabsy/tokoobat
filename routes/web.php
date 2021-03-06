<?php
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

Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Route::get('/cart', 'HomeController@cart');
Route::get('/single-product', 'HomeController@single_product');
Route::get('/product', 'HomeController@product');
Route::get('/checkout', 'HomeController@checkout');
