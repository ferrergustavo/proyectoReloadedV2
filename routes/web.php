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







Route::get('/searchResult','SearchController@show');
Route::get('shoppingCart','CartController@show');
// --Rutas De Adm --
<<<<<<< HEAD
Route::get('/adm','ProductsController@adm');
Route::get('/admProduct','ProductsController@list');
Route::get('/admProduct/new','ProductsController@create');
Route::delete('/admProduct/delete','ProductsController@destroy');
Route::put('/admProduct/update','ProductsController@update');
// -- Rutas de navBar --
Route::get('/faqs','FaqsController@index');
Route::get('/selectedProduct','ProductsController@show');
=======
Route::get('/adm','admProductController@adm');
Route::post('/adm','admProductController@adm');
// -- Rutas De ADM Products -- 
Route::get('/admProduct','admProductController@index');
Route::get('/admProduct/create','admProductController@create');
Route::get('/admProduct/show/{id}','admProductController@show');
Route::delete('/admProduct/{id}','admProductController@destroy');
Route::get('/admProduct/edit/{id}','admProductController@edit');
Route::put('/editProduct/{id}','admProductController@update')->name('editProduct');
Route::get('/admProduct/newBrand','admProductController@brand');
Route::post('/admProduct/newBrandEnviar','admProductController@createBrand');

// -- Rutas De ADM USER--
Route::get('/admUser','admUserController@index');
Route::get('/admUser/show/{id}','admUserController@show');
Route::get('/admUser/edit/{id}','admUserController@edit');
Route::delete('/admUser/{id}','admUserController@destroy');
Route::put('/editUser/{id}','admUserController@update')->name('editUser');
>>>>>>> 965515c57148ea5a9212a8762edb239717513526
