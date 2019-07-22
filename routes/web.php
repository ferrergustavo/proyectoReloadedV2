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


//Search
Route::get('/search', 'SearchController@search');

//

Route::get('/productsInfo','ProductsController@productInfo');



Route::get('/searchResult','SearchController@show');
Route::get('shoppingCart','CartController@show');
// --Rutas De Adm --
Route::group(['prefix' => 'admin', 'middleware' => ['auth','profile']], function () {
    Route::resource('/adm', 'adminProductController');
    Route::resource('/adm', 'adminUserController');
});
Route::get('/adm','admProductController@adm')->middleware('auth','profile:9797');
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
Route::post('/admProduct/createEnviar','admProductController@store');

// -- Rutas De ADM USER--
Route::get('/admUser','admUserController@index');
Route::get('/admUser/show/{id}','admUserController@show');
Route::get('/admUser/edit/{id}','admUserController@edit');
Route::delete('/admUser/{id}','admUserController@destroy');
Route::put('/editUser/{id}','admUserController@update')->name('editUser');