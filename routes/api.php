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

Route::group(['prefix' => 'stores'], function () {
	Route::get('list', 'StoreController@list');
	Route::get('add', 'StoreController@add');
	Route::get('edit', 'StoreController@edit');
	Route::get('remove', 'StoreController@remove');
});