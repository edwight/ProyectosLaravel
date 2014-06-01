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

Route::get('prueba', function()
{
	$user = new usuario;
	$user->email = "edwar@gmail.com";
	$user->full_name = 'HFU 88J';
	$user->password =Hash::make('prueba');
	$user->save();

	$truth = array('email' => 'email');
	return json_encode($truth);
	
});

Route::get('prueba2', function()
{
	$tools = array('paintbrush','canvas','aprons');  // or array(0 =>'paintbrush',1=>'canvas',2=>'apron');
	echo json_encode($tools);
	//$data=>array('nombre' => 'Taylor Otwell', 'estado' => 'Gurú del Código');
    //$ana=Response::json($data);
    //return View::make('ajax', $data);
});

Route::get('ajaxs','UsuariosController@ajaxs');
Route::get('usuarios','UsuariosController@mostrarUsuarios');
Route::controller('otro', 'LegajosController');

?>