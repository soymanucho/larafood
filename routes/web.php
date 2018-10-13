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

// SELLABLES

Route::get('/admin/vendibles/', 'SellableController@show')->name('sellable-show');

Route::get('/admin/vendibles/{sellable}/editar', 'SellableController@edit')->name('sellable-edit');

Route::put('/admin/vendibles/{sellable}/editar', 'SellableController@update')->name('sellable-update');

Route::delete('/admin/vendibles/{sellable}/eliminar', 'SellableController@delete')->name('sellable-delete');

Route::get('/admin/vendibles/agregar', 'SellableController@new')->name('sellable-new');

Route::post('/admin/vendibles/agregar', 'SellableController@save')->name('sellable-save');

// PRODUCTS

Route::get('/admin/productos/', 'ProductController@show')->name('product-show');

Route::get('/admin/productos/{product}/editar', 'ProductController@edit')->name('product-edit');

Route::put('/admin/productos/{product}/editar', 'ProductController@update')->name('product-update');

Route::delete('/admin/productos/{product}/eliminar', 'ProductController@delete')->name('product-delete');

Route::get('/admin/productos/agregar', 'ProductController@new')->name('product-new');

Route::post('/admin/productos/agregar', 'ProductController@save')->name('product-save');

//PRODUCT TYPES ROUTES

Route::get('/admin/tiposDeProducto/', 'SellableTypeController@show')->name('sellabletype-show');

Route::delete('/admin/tiposDeProducto/{sellableType}/eliminar', 'SellableTypeController@delete')->name('sellabletype-delete');

Route::get('/admin/tiposDeProducto/{sellableType}/editar', 'SellableTypeController@edit')->name('sellabletype-edit');

Route::put('/admin/tiposDeProducto/{sellableType}/editar', 'SellableTypeController@update')->name('sellabletype-update');

Route::get('/admin/tiposDeProducto/agregar', 'SellableTypeController@new')->name('sellabletype-new');

Route::post('/admin/tiposDeProducto/agregar', 'SellableTypeController@save')->name('sellabletype-save');

//INGREDIENTS ROUTES

Route::get('/admin/ingredientes', 'IngredientController@show')->name('ingredient-show');

Route::delete('/admin/ingredientes/{ingredient}/eliminar', 'IngredientController@delete')->name('ingredient-delete');

Route::get('/admin/ingredientes/agregar', 'IngredientController@new')->name('ingredient-new');

Route::post('/admin/ingredientes/agregar', 'IngredientController@save')->name('ingredient-save');

Route::get('/admin/ingredientes/{ingredient}/editar', 'IngredientController@edit')->name('ingredient-edit');

Route::put('/admin/ingredientes/{ingredient}/editar', 'IngredientController@update')->name('ingredient-update');


//COUNTRIES ROUTES

Route::get('/admin/paises', 'CountryController@show')->name('country-show');

Route::delete('/admin/paises/{country}/eliminar', 'CountryController@delete')->name('country-delete');

Route::get('/admin/paises/agregar', 'CountryController@new')->name('country-new');

Route::post('/admin/paises/agregar', 'CountryController@save')->name('country-save');

Route::get('/admin/paises/{country}/editar', 'CountryController@edit')->name('country-edit');

Route::put('/admin/paises/{country}/editar', 'CountryController@update')->name('country-update');

//PROVINCES ROUTES

Route::get('/admin/provincias', 'ProvinceController@show')->name('province-show');

Route::delete('/admin/provincias/{province}/eliminar', 'ProvinceController@delete')->name('province-delete');

Route::get('/admin/provincias/agregar', 'ProvinceController@new')->name('province-new');

Route::post('/admin/provincias/agregar', 'ProvinceController@save')->name('province-save');

Route::get('/admin/provincias/{province}/editar', 'ProvinceController@edit')->name('province-edit');

Route::put('/admin/provincias/{province}/editar', 'ProvinceController@update')->name('province-update');

//CITIES ROUTES

Route::get('/admin/ciudades', 'CityController@show')->name('city-show');

Route::delete('/admin/ciudades/{city}/eliminar', 'CityController@delete')->name('city-delete');

Route::get('/admin/ciudades/agregar', 'CityController@new')->name('city-new');

Route::post('/admin/ciudades/agregar', 'CityController@save')->name('city-save');

Route::get('/admin/ciudades/{city}/editar', 'CityController@edit')->name('city-edit');

Route::put('/admin/ciudades/{city}/editar', 'CityController@update')->name('city-update');



//MENU

Route::get('/admin/tiendas/{store}/menu', 'MenuController@show')->name('menu-show');

Route::delete('/admin/tiendas/{store}/menu/{sellable}/eliminar', 'MenuController@delete')->name('menu-item-delete');

Route::get('/admin/tiendas/{store}/menu/agregar', 'MenuController@new')->name('menu-item-new');

Route::put('/admin/tiendas/{store}/menu/agregar', 'MenuController@save')->name('menu-item-save');

Route::get('/admin/tiendas/{store}/menu/{sellable}/editar', 'MenuController@edit')->name('menu-item-edit');

Route::post('/admin/tiendas/{store}/menu/{sellable}/editar', 'MenuController@update')->name('menu-item-update');



//STORES ROUTES

Route::get('/admin/tiendas', 'StoreController@show')->name('store-show');

Route::delete('/admin/tiendas/{store}/eliminar', 'StoreController@delete')->name('store-delete');

Route::get('/admin/tiendas/agregar', 'StoreController@new')->name('store-new');

Route::post('/admin/tiendas/agregar', 'StoreController@save')->name('store-save');

Route::get('/admin/tiendas/{store}/editar', 'StoreController@edit')->name('store-edit');

Route::put('/admin/tiendas/{store}/editar', 'StoreController@update')->name('store-update');

Route::get('/admin/tiendas/{store}/pedido/agregar', 'OrderController@new')->name('order-new');

Route::post('/admin/tiendas/{store}/pedido/agregar', 'OrderController@save')->name('order-save');





//CLIENTS

Route::get('/admin/clientes', 'ClientController@show')->name('client-show');

Route::delete('/admin/clientes/{client}/eliminar', 'ClientController@delete')->name('client-delete');

Route::get('/admin/clientes/agregar', 'ClientController@new')->name('client-new');

Route::post('/admin/clientes/agregar', 'ClientController@save')->name('client-save');

Route::get('/admin/clientes/{client}/editar', 'ClientController@edit')->name('client-edit');

Route::put('/admin/clientes/{client}/editar', 'ClientController@update')->name('client-update');

//ORDERS ROUTES

Route::get('/admin/pedidos', 'OrderController@show')->name('order-show');

Route::delete('/admin/pedidos/{order}/eliminar', 'OrderController@delete')->name('order-delete');

Route::get('/admin/pedidos/agregar', 'OrderController@new')->name('order-new');

Route::post('/admin/pedidos/agregar', 'OrderController@save')->name('order-save');

Route::get('/admin/pedidos/{order}/editar', 'OrderController@edit')->name('order-edit');

Route::put('/admin/pedidos/{order}/editar', 'OrderController@update')->name('order-update');

Route::get('/admin/dashboard/', 'DashboardController@show')->name('dashboard-show');

Route::get('/admin', 'DashboardController@show')->name('dashboard-show');


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
