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
    return view('auth/login');
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

Route::prefix('perfil')->group(function() {
    Route::resource('perfil','PerfilController');

});


Route::group(['prefix'=> 'Asignacion'], function(){

	Route::resource('Asignacion','AsignacionController');
	Route::get('Asignacion/{id}/destroy',[
		'uses' => 'AsignacionController@destroy',
		'as'   => 'Asignacion.destroy'
 		]);
});

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');


Route::group(['prefix'=> 'integranteGrupo'], function(){

  Route::resource('integranteGrupo','integranteGrupoController');
  Route::get('integranteGrupo/{id}/destroy',[
    'uses' => 'integranteGrupoController@destroy',
    'as'   => 'integranteGrupo.destroy'
    ]);
});