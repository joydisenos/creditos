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
		Route::get('/creditos', 'UsuarioController@creditos')->name('usuario.creditos');
		Route::get('/ver/credito/{id}', 'UsuarioController@verCredito')->name('usuario.ver.credito');
		
		Route::get('/mensajes', 'UsuarioController@mensajes')->name('usuario.mensajes');
		Route::get('/ver/{id}/mensaje', 'UsuarioController@verMensaje')->name('usuario.ver.mensaje');

		Route::get('/usuarios', 'UsuarioController@usuarios')->name('usuario.usuarios');
	});

	//Admin
	Route::prefix('admin')->group( function () {

		Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

		Route::get('/usuarios', 'AdminController@usuarios')->name('admin.usuarios');
		Route::get('/crear/usuario', 'AdminController@crearUsuario')->name('admin.crear.usuario');
		Route::post('/crear/usuario', 'AdminController@crearNuevoUsuario')->name('admin.crear.nuevo.usuario');
		Route::get('/modificar/usuario/{id}', 'AdminController@modificarUsuario')->name('admin.modificar.usuario');
		Route::post('/actualizar/usuario/{id}', 'AdminController@actualizarUsuario')->name('admin.actualizar.usuario');

		Route::get('/creditos', 'AdminController@creditos')->name('admin.creditos');
		Route::get('/crear/credito', 'AdminController@crearCredito')->name('admin.crear.credito');
		Route::post('/crear/credito', 'AdminController@crearNuevoCredito')->name('admin.crear.nuevo.credito');
		Route::get('/ver/credito/{id}', 'AdminController@verCredito')->name('admin.ver.credito');
		Route::get('/aprobar/credito/{id}', 'AdminController@aprobarCredito')->name('admin.aprobar.credito');
		Route::get('/negar/credito/{id}', 'AdminController@negarCredito')->name('admin.negar.credito');

		Route::get('/cobros', 'AdminController@cobros')->name('admin.ver.cobros');
		Route::get('/marcar/{id}/cobro', 'AdminController@marcarCuotaPaga')->name('admin.marcar.cobro.pago');

		Route::get('/enviar/mensaje', 'AdminController@enviarMensaje')->name('admin.enviar.mensaje');
		Route::post('/enviar/nuevo/mensaje', 'AdminController@enviarNuevoMensaje')->name('admin.enviar.nuevo.mensaje');

		Route::get('/pagos', 'AdminController@pagos')->name('admin.ver.pagos');
		Route::get('/marcar/pago/{id}', 'AdminController@marcarPago')->name('admin.marcar.pago');
	
	});
