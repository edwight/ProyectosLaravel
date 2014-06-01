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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('1', 'NoticiasController@mostrarNoticias');
Route::controller('2', 'NoticiasController');

Route::get('3', function()
{
	return 'sdadaa';
});
?>