<?php
Route::get('/', 'PagesController@index');
Route::get('filosofia', 'PagesController@filosofia');
Route::get('cultura-organizacional', 'PagesController@cultura');
Route::get('acerca-de', 'PagesController@acercade');
Route::get('club-pistones', 'PagesController@clubpistones');
Route::get('cocina', 'PagesController@cocina');
Route::get('sucursales', 'PagesController@sucursales');
Route::get('franquicia', 'PagesController@franquicia');
Route::get('menu-to-go', 'PagesController@menu');
Route::get('live-score', 'PagesController@livescore');
Route::get('quiniela', function ()
{
	return redirect('/pdf/quiniela-pistones-rusia-2018.pdf');
});
Route::get('sportstravel', 'PagesController@sports_travel');
Route::post('sendmail', 'PagesController@sendmail');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
