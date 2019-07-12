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

Route::get('/', 'IndexController@home');
Route::get('/products','ProductsController@index');




// Rutas editar perfil
Route::get('/editprofile','EditProfileController@index');
Route::get('/editprofile/{id}','EditProfileController@edit');
Route::put('/update/{id}', 'EditProfileController@update')->name('update');





//

Route::get('/productsInfo','ProductsController@productInfo');



// --Rutas De Adm --
Route::get('/adm','ProductsController@adm');
Route::get('/admProduct','ProductsController@list');
Route::get('/admProduct/new','ProductsController@create');
Route::delete('/admProduct/delete','ProductsController@destroy');
Route::put('/admProduct/update','ProductsController@update');