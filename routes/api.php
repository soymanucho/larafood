<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('admin/dashboard', 'APIController@dashboard');

Route::get('admin/countries', 'APIController@countries');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
