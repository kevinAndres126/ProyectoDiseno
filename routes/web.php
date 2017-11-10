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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=> 'Grupo'], function(){

  Route::resource('Grupo','GrupoController');
  Route::get('Grupo/{id}/destroy',[
    'uses' => 'GrupoController@destroy',
    'as'   => 'Grupo.destroy'
    ]);
});


Route::group(['prefix'=> 'Asignacion'], function(){

	Route::resource('Asignacion','AsignacionController');
	Route::get('Asignacion/{id}/destroy',[
		'uses' => 'AsignacionController@destroy',
		'as'   => 'Asignacion.destroy'
 		]);
});

