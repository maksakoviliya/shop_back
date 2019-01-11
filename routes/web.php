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

Route::get('/', 'HomePageController@index')->name('homepage');

Route::get('/catalog', 'CatalogPageController@index')->name('catalog');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{id}', 'CartController@destroy')->name('product.destroy');

Route::get('/product/{slug}', 'ProductController@show')->name('product.show');

Route::get('/cart/clear', function()
{
	Gloudemans\Shoppingcart\Facades\Cart::destroy();
});
