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

Route::resource('Grupo','GrupoController');

Route::resource('Asignacion','AsignacionController');



Route::group(['prefix'=> 'Grupo'], function(){

	Route::resource('Tarea','TareaController');
	Route::get('Tarea/{id}/destroy',[
		'uses' => 'TareaController@destroy',
		'as'   => 'Grupo.Tarea.destroy'
 		]);
});
