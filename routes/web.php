<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'], function () {
});
Route::group(['namespace' => 'Auth'], function() {
    Route::get('login',['as' => 'login', 'uses' => 'LoginController@showLogin']);
    Route::post('login',['as' => 'do_login', 'uses' => 'LoginController@login']);
});

Route::get('users',['as' => 'users.index', 'uses' => 'UserController@index']);
Route::get('users/show/{id}','UserController@show');
Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create']);
Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store']);
Route::get('users/edit/{id}',['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::post('users/edit/{id}',['as' => 'users.update', 'uses' => 'UserController@update']);
Route::get('destroy/{id}',['as' => 'users.destroy', 'uses' => 'UserController@destroy']);


