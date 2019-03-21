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
    return redirect()->route('login');
});






Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



/*



Route::resource('edificio','EdificioController');
Route::resource('tipo','TipoController');
Route::resource('area','AreaController');

*/
Route::middleware(['auth'])->group(function(){

	include 'modules/users.php';
	include 'modules/roles.php';
	include 'modules/permissions.php';
	include 'modules/equipos.php';
	include 'modules/softwares.php';
	include 'modules/perifericos.php';
	include 'modules/clientes.php';	
/*	//tikets
	Route::get('tikets', 'TicketController@index')->name('tikets.index')->middleware('permission:tikets.index');

	Route::post('tikets/store', 'TicketController@store')->name('tikets.store')->middleware('permission:tikets.create');

	Route::get('tikets/create', 'TicketController@create')->name('tikets.create')->middleware('permission:tikets.create');

	Route::put('tikets/{tiket}', 'TicketController@update')->name('tikets.update')->middleware('permission:tikets.edit');

	Route::post('tikets/{tiket}', 'TicketController@show')->name('tikets.show')->middleware('permission:tikets.show');

	Route::post('tikets/{tiket}', 'TicketController@destroy')->name('tikets.destroy')->middleware('permission:tikets.create');

	Route::post('tikets/{tiket}', 'TicketController@edit')->name('tikets.edit')->middleware('permission:tikets.edit');

	//dependencias
	Route::get('dependencias', 'DependenciaController@index')->name('dependencias.index')->middleware('permission:dependencias.index');

	Route::post('dependencias/store', 'DependenciaController@store')->name('dependencias.store')->middleware('permission:dependencias.create');

	Route::get('dependencias/create', 'DependenciaController@create')->name('dependencias.create')->middleware('permission:dependencias.create');

	Route::put('dependencias/{dependencia}', 'DependenciaController@update')->name('dependencias.update')->middleware('permission:dependencias.edit');

	Route::post('dependencias/{dependencia}', 'DependenciaController@show')->name('dependencias.show')->middleware('permission:dependencias.show');

	Route::post('dependencias/{dependencia}', 'DependenciaController@destroy')->name('dependencias.destroy')->middleware('permission:dependencias.create');

	Route::post('dependencias/{dependencia}', 'DependenciaController@edit')->name('dependencias.edit')->middleware('permission:dependencias.edit');

/*/
});



