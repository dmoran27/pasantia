<?php

//clientes
	Route::get('clientes', 'ClienteController@index')->name('clientes.index')->middleware('permission:clientes.index');

	Route::post('clientes/store', 'ClienteController@store')->name('clientes.store')->middleware('permission:clientes.store');

	Route::get('clientes/create', 'ClienteController@create')->name('clientes.create')->middleware('permission:clientes.create');

	Route::put('clientes/{cliente}', 'ClienteController@update')->name('clientes.update')->middleware('permission:clientes.edit');

	Route::get('clientes/{cliente}', 'ClienteController@show')->name('clientes.show')->middleware('permission:clientes.show');

	Route::delete('clientes/{cliente}', 'ClienteController@destroy')->name('clientes.destroy')->middleware('permission:clientes.create');

	Route::get('clientes/{cliente}/edit', 'ClienteController@edit')->name('clientes.edit')->middleware('permission:clientes.edit');

	Route::post('clientes/create', 'ClienteController@password')->name('clientes.password')->middleware('permission:clientes.create');