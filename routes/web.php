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

Route::get('/', 'IndexController@home')->middleware('cart');
Route::get('/products','ProductsController@getIndex');
Route::get('/teclado','ProductsController@productSelectT');
Route::get('/mouse','ProductsController@productSelectM');
Route::get('/auriculares','ProductsController@productSelectA');
Route::get('/infoProduct/{id}','ProductsController@show')->middleware('cart');
Route::get('/productB/{id}','IndexController@productB');

Route::group(['middleware' => 'cart'], function () {
    Route::get('/', 'IndexController@home');
    Route::get('/products',['uses'=>'ProductsController@getIndex','as'=>'product.index']);
    Route::get('addToCart/{id}',['uses'=> 'ProductsController@getAddToCart','as'=>'products.addToCart']);
});




// Rutas editar perfil
//Route::get('/editprofile','EditProfileController@index');
Route::get('/editprofile/{id}','EditProfileController@edit');
Route::put('editprofile/update/{id}', 'EditProfileController@update');

Route::post('logout', 'IndexController@logout')->name('logout');
//Search
Route::get('/search', 'SearchController@search');

//

Route::get('/productsInfo','ProductsController@productInfo');



Route::get('/searchResult','SearchController@show');
Route::get('/shoppingCart','CartController@show');

// --Rutas De Adm --

Route::get('/adm','ProductsController@adm');
Route::get('/admProduct','ProductsController@list');
Route::get('/admProduct/new','ProductsController@create');
Route::delete('/admProduct/delete','ProductsController@destroy');
Route::put('/admProduct/update','ProductsController@update');
// -- Rutas de navBar --
Route::get('/faqs','FaqsController@index');
Route::get('/selectedProduct','ProductsController@show');

Route::get('/adm','admProductController@adm');
Route::group(['prefix' => 'admin', 'middleware' => ['auth','profile']], function () {
    Route::resource('/adm', 'adminProductController');
    Route::resource('/adm', 'adminUserController');
});
Route::get('/adm','admProductController@adm')->middleware('auth','profile:9797');
Route::post('/adm','admProductController@adm')->middleware('auth','profile:9797');
// -- Rutas De ADM Products -- 
Route::get('/admProduct','admProductController@index')->middleware('auth','profile:9797');
Route::get('/admProduct/create','admProductController@create')->middleware('auth','profile:9797');
Route::get('/admProduct/show/{id}','admProductController@show')->middleware('auth','profile:9797');
Route::delete('/admProduct/{id}','admProductController@destroy')->middleware('auth','profile:9797');
Route::get('/admProduct/edit/{id}','admProductController@edit')->middleware('auth','profile:9797');
Route::put('/editProduct/{id}','admProductController@update')->name('editProduct')->middleware('auth','profile:9797');
Route::get('/admProduct/newBrand','admProductController@brand')->middleware('auth','profile:9797');
Route::post('/admProduct/newBrandEnviar','admProductController@createBrand')->middleware('auth','profile:9797');
Route::post('/admProduct/createEnviar','admProductController@store')->middleware('auth','profile:9797');

// -- Rutas De ADM USER--
Route::get('/admUser','admUserController@index');
Route::get('/admUser/show/{id}','admUserController@show');
Route::get('/admUser/edit/{id}','admUserController@edit');
Route::delete('/admUser/{id}','admUserController@destroy');
Route::put('/editUser/{id}','admUserController@update')->name('editUser');

Route::get('/admUser','admUserController@index')->middleware('auth','profile:9797');
Route::get('/admUser/show/{id}','admUserController@show')->middleware('auth','profile:9797');
Route::get('/admUser/edit/{id}','admUserController@edit')->middleware('auth','profile:9797');
Route::delete('/admUser/{id}','admUserController@destroy')->middleware('auth','profile:9797');
Route::put('/editUser/{id}','admUserController@update')->name('editUser')->middleware('auth','profile:9797');
