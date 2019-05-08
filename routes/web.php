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
Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

//Modulos Administrativos

	//Usuarios
	Route::prefix('usuario')->group( function () {
		Route::get('/', 'UsuarioController@index')->name('usuario.index');
	});

	//Admin
	Route::prefix('admin')->group( function () {

		Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
		Route::get('/usuarios', 'AdminController@usuarios')->name('admin.usuarios');
		Route::get('/crear/usuario', 'AdminController@crearUsuario')->name('admin.crear.usuario');
		Route::post('/crear/usuario', 'AdminController@crearNuevoUsuario')->name('admin.crear.nuevo.usuario');
	
	});
