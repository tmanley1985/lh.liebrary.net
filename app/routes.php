<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
	'as' => 'home', 
	'uses' => 'PagesController@index'
	)
);

// Creates a controller route for users

Route::resource('users', 'UsersController');

// Creates a route alias for login and creates a new session
Route::get('login', 'SessionsController@create');

// Creates a route alias for logout and destroys the session
Route::get('logout', 'SessionsController@destroy');

// Creates a resource route for Sessions
Route::resource('sessions', 'SessionsController');