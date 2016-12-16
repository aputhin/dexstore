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
	Route::post('save', 'StoreController@save');
	Route::post('remove', 'StoreController@remove');
});
