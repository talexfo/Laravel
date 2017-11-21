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


Route::get('/', ['as' => 'inicio', 'uses' => 'PagesController@inicio']);

/* ->middleware('example'); */

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludos'])->Where('nombre', "[A-Za-z]+");

/* messages.create (nombrerecurso.metododelcontrolador) */



Route::resource('mensajes', 'MessagesController');
Route::resource('usuarios', 'UsuariosController');

/* 

Route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);

Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);

Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);

Route::get('mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);

Route::get('mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);

Route::put('mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);

Route::delete('mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);

 */


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');



Route::get('roles', function(){
	return \App\Role::with('user')->get();
});


/* 


Route::get('test1', function() {
    $user = new App\User;
    $user->name = 'Admin';
    $user->email = 'admin@email.com';
    $user->password = bcrypt('admin2.1');
    $user->role_id = 1;
    $user->save();
});

Route::get('test2', function() {
    $user = new App\User;
    $user->name = 'Moderador';
    $user->email = 'moderador@email.com';
    $user->password = bcrypt('admin2.1');
    $user->role_id = 2;
    $user->save();
});

 */
