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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', 'ViewController@list');

Route::group(['prefix' => 'stores'], function () {
	Route::get('list', 'StoreController@list');
	Route::get('add', 'StoreController@add');
	Route::get('edit', 'StoreController@edit');
	Route::get('remove', 'StoreController@remove');
});