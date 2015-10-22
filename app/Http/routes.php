<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::post('addProduct','ProductController@addProduct');
Route::post('editProduct','ProductController@editProduct');
Route::delete('deleteProduct/{id}','ProductController@destroyProduct');
Route::get('home', 'HomeController@index');
Route::get('product','ProductController@index');
Route::get('getStudentList','ProductController@getStudentList');
Route::get('getSingleStudent/{id}','ProductController@getSingleStudent');







Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
