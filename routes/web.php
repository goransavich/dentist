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
	$user = Auth::user();
    return view('welcome', compact('user'));
});

Route::get('/office', 'BookingController@create')->middleware('auth');

Route::get('/office/{id}', 'BookingController@show')->middleware('auth');

Route::get('login', ['as' => 'login', 'uses' => 'SessionController@create']);

Route::post('login', 'SessionController@store');

Route::get('/logout', 'RegistrationController@destroy');

Route::get('/register', 'RegistrationController@create')->middleware('auth');

Route::post('/register', 'RegistrationController@store')->middleware('auth');

Route::post('office/{id}', 'EventController@store')->middleware('auth');








