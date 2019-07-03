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


Auth::routes();
Route::get('/','IndexController@home');

Route::get('/addProduct','ProductsController@new');
Route::get('/addProduct','ProductsController@create');
Route::get('/', 'IndexController@home');
Route::get('/products','ProductsController@index');



Route::get('/productsInfo','ProductsController@productInfo');







Route::get('/searchResult','SearchController@show');
Route::get('shoppingCart','CartController@show');