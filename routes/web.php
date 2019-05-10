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
    return view('login');
});
Route::group(['middleware' => 'userStatus'], function() {
	Route::get('logout', 'LoginController@logout');
	Route::get('admin-panel','LoginController@loadHomeAdmin');
	Route::get('user-panel','LoginController@loadHomeUser');
});
Route::post('login','LoginController@authenticate');
Route::get('iniciar-sesion','LoginController@index');

Route::get('form-registrar-usuario','UserController@index');
Route::post('registrar-usuario','UserController@store');
