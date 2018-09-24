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

//INGREDIENTS

Route::get('/admin/ingredientes', 'IngredientController@show');

Route::delete('/admin/ingredientes/{ingredient}/eliminar', 'IngredientController@delete');

Route::get('/admin/ingredientes/agregar', 'IngredientController@new');

Route::post('/admin/ingredientes/agregar', 'IngredientController@save');

Route::get('/admin/ingredientes/{ingredient}/editar', 'IngredientController@edit');

Route::put('/admin/ingredientes/{ingredient}/editar', 'IngredientController@update');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
