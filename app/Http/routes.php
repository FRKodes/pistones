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

Route::get('/', 'PagesController@index');
Route::get('filosofia', 'PagesController@filosofia');
Route::get('acerca-de', 'PagesController@acercade');
Route::get('club-pistones', 'PagesController@clubpistones');
Route::get('cocina', 'PagesController@cocina');
Route::get('sucursales', 'PagesController@sucursales');
Route::get('franquicia', 'PagesController@franquicia');
Route::post('sendmail', 'PagesController@sendmail');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
