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

Route::get('/','WelcomeController@index');

Route::get('home', 'HomeController@index');

App::bind('App\Repos\OddsRepoInterface' ,'App\Repos\DbOddsRepo');
Route::get('odds',['as' =>'odds','uses' => 'OddsController@index']);
Route::resource('odds','OddsController');
Route::resource('types','TypeController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
