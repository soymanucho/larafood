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

// PRODUCTS
Route::get('/admin/productos/', 'ProductController@show')->name('product-show');

Route::get('/admin/productos/{product}/editar', 'ProductController@edit');

Route::put('/admin/productos/{product}/editar', 'ProductController@update');

Route::delete('/admin/productos/{product}/eliminar', 'ProductController@delete')->name('product-delete');

Route::get('/admin/productos/agregar', 'ProductController@new')->name('product-new');

Route::post('/admin/productos/agregar', 'ProductController@save');

//PRODUCT TYPES

Route::get('/admin/tiposDeProducto/', 'SellableTypeController@show')->name('productype-show');

Route::delete('/admin/tiposDeProducto/{productType}/eliminar', 'SellableTypeController@delete')->name('productype-delete');

Route::get('/admin/tiposDeProducto/{productType}/editar', 'SellableTypeController@edit')->name('productype-edit');

Route::put('/admin/tiposDeProducto/{productType}/editar', 'SellableTypeController@update')->name('productype-update');

Route::get('/admin/tiposDeProducto/agregar', 'SellableTypeController@new')->name('productype-new');

Route::post('/admin/tiposDeProducto/agregar', 'SellableTypeController@save')->name('productype-save');

//INGREDIENTS

Route::get('/admin/ingredientes', 'IngredientController@show')->name('ingredient-show');

Route::delete('/admin/ingredientes/{ingredient}/eliminar', 'IngredientController@delete')->name('ingredient-delete');

Route::get('/admin/ingredientes/agregar', 'IngredientController@new')->name('ingredient-new');

Route::post('/admin/ingredientes/agregar', 'IngredientController@save')->name('ingredient-save');

Route::get('/admin/ingredientes/{ingredient}/editar', 'IngredientController@edit')->name('ingredient-edit');

Route::put('/admin/ingredientes/{ingredient}/editar', 'IngredientController@update')->name('ingredient-update');


//COUNTRIES

Route::get('/admin/paises', 'CountryController@show')->name('country-show');

Route::delete('/admin/paises/{country}/eliminar', 'CountryController@delete')->name('country-delete');

Route::get('/admin/paises/agregar', 'CountryController@new')->name('country-new');

Route::post('/admin/paises/agregar', 'CountryController@save')->name('country-save');

Route::get('/admin/paises/{country}/editar', 'CountryController@edit')->name('country-edit');

Route::put('/admin/paises/{country}/editar', 'CountryController@update')->name('country-update');

//PROVINCES

Route::get('/admin/provincias', 'ProvinceController@show')->name('province-show');

Route::delete('/admin/provincias/{province}/eliminar', 'ProvinceController@delete')->name('province-delete');

Route::get('/admin/provincias/agregar', 'ProvinceController@new')->name('province-new');

Route::post('/admin/provincias/agregar', 'ProvinceController@save')->name('province-save');

Route::get('/admin/provincias/{province}/editar', 'ProvinceController@edit')->name('province-edit');

Route::put('/admin/provincias/{province}/editar', 'ProvinceController@update')->name('province-update');

//CITIES

Route::get('/admin/ciudades', 'CityController@show')->name('city-show');

Route::delete('/admin/ciudades/{city}/eliminar', 'CityController@delete')->name('city-delete');

Route::get('/admin/ciudades/agregar', 'CityController@new')->name('city-new');

Route::post('/admin/ciudades/agregar', 'CityController@save')->name('city-save');

Route::get('/admin/ciudades/{city}/editar', 'CityController@edit')->name('city-edit');

Route::put('/admin/ciudades/{city}/editar', 'CityController@update')->name('city-update');

//STORES

Route::get('/admin/tiendas', 'StoreController@show')->name('store-show');

Route::delete('/admin/tiendas/{store}/eliminar', 'StoreController@delete')->name('store-delete');

Route::get('/admin/tiendas/agregar', 'StoreController@new')->name('store-new');

Route::post('/admin/tiendas/agregar', 'StoreController@save')->name('store-save');

Route::get('/admin/tiendas/{store}/editar', 'StoreController@edit')->name('store-edit');

Route::put('/admin/tiendas/{store}/editar', 'StoreController@update')->name('store-update');

//CLIENTS

Route::get('/admin/clientes', 'ClientController@show')->name('client-show');

Route::delete('/admin/clientes/{client}/eliminar', 'ClientController@delete')->name('client-delete');

Route::get('/admin/clientes/agregar', 'ClientController@new')->name('client-new');

Route::post('/admin/clientes/agregar', 'ClientController@save')->name('client-save');

Route::get('/admin/clientes/{client}/editar', 'ClientController@edit')->name('client-edit');

Route::put('/admin/clientes/{client}/editar', 'ClientController@update')->name('client-update');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
