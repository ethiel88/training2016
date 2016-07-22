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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/////////////////
//ruta simple
Route::get('/url1', function(){
	return "RUTA 1";
});

Route::get('/url1/{ci}', function($ci){
	return "RUTA 1 con parametro obligatorio $ci.";
});

Route::get('/url2/{ci?}/{edad?}', function($ci=0, $edad=0){
	return "Ruta 2 con parametros opcionales $ci $edad";
});

Route::get('/url3/{id}', function($id){
	return "Ruta 3, con id numerico obligatorio $id";
})->where(["id"=>'[0-9]+']);

Route::get('/url4/{id}', function($id){
	return "Ruta 4, con id alfabetico obligatorio $id";
})->where(["id"=>'[a-z]+']);

//          /url5/abcc/10a
Route::get('/url5/{id}/{edad}', function($id, $edad){
	return "Ruta 5, con id alfabetico obligatorio $id y edad numerico obligatorio $edad";
})->where(["id"=>'[a-z]+', 'edad'=>'[0-9]+']);

Route::get('/url6', 'OperacionesController@action1');
Route::post('/url6', 'OperacionesController@action2');

Route::match(['get', 'post'], '/url7', 'OperacionesController@action3');

Route::any('/url8', function(){return "Ruta 8";});

Route::get('/url9', ['as'=>'nueve', 'uses'=>'OperacionesController@action4']);

Route::group(['middleware'=>'auth'], function(){
	Route::get('/mi-perfil', function(){return "Mi perfil";});
	Route::get('/settings', function(){return "Settings";});
	Route::get('/mis-amigos', function(){return "Mis amigos";});
});

Route::get('/about-us', function(){return "About us";});
Route::get('/mision', function(){return "Mision";});
Route::get('/vision', function(){return "Vision";});