<?php

//clientes
	Route::get('clientes', 'ClienteController@index')->name('clientes.index')->middleware('permission:clientes.index');

	Route::post('clientes/store', 'ClienteController@store')->name('clientes.store')->middleware('permission:clientes.create');

	Route::get('clientes/create', 'ClienteController@create')->name('clientes.create')->middleware('permission:clientes.create');

	Route::put('clientes/{cliente}', 'ClienteController@update')->name('clientes.update')->middleware('permission:clientes.edit');

	Route::post('clientes/{cliente}', 'ClienteController@show')->name('clientes.show')->middleware('permission:clientes.show');

	Route::post('clientes/{cliente}', 'ClienteController@destroy')->name('clientes.destroy')->middleware('permission:clientes.create');

	Route::post('clientes/{cliente}', 'ClienteController@edit')->name('clientes.edit')->middleware('permission:clientes.edit');