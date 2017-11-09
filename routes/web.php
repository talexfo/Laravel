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


Route::get('contactame', ['as' => 'contactos', 'uses' => 'PagesController@contactos']);

Route::post('contacto','PagesController@mensajes');

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludos'])->Where('nombre', "[A-Za-z]+");


/* messages.create (nombrerecurso.metododelcontrolador) */



Route::resource('mensajes', 'MessagesController');

/* 

Route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);

Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);

Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);

Route::get('mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);

Route::get('mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);

Route::put('mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);

Route::delete('mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);

 */

