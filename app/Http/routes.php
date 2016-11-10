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

// Get the access token of the oauth2
Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

Route::group(['before' => 'oauth'], function() {
	Route::resource('user', 'UserController',
		['except' => ['create', 'edit']]
	);
});

Route::get('/', function() {
	return view('app');
});