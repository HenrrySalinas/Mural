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

Route::get('/', function () {
    return view('welcome');
});

Route::Group(array('prefix'=>'api/v0.1'),function(){
	Route::Resource('persona','personaController',['only'=>['index','store','update','destroy']]);
	Route::Resource('post','postController',['only'=>['index','store','update','destroy']]);	
});
