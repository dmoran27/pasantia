<?php

//equipos
	Route::get('equipos', 'EquipoController@index')->name('equipos.index')->middleware('permission:equipos.index');

	Route::post('equipos/store', 'EquipoController@store')->name('equipos.store')->middleware('permission:equipos.store');

	Route::get('equipos/create', 'EquipoController@create')->name('equipos.create')->middleware('permission:equipos.create');

	Route::put('equipos/{id}', 'EquipoController@update')->name('equipos.update')->middleware('permission:equipos.edit');

	Route::get('equipos/{id}', 'EquipoController@show')->name('equipos.show')->middleware('permission:equipos.show');

	Route::delete('equipos/{id}', 'EquipoController@destroy')->name('equipos.destroy')->middleware('permission:equipos.create');

	Route::get('equipos/{id}/edit', 'EquipoController@edit')->name('equipos.edit')->middleware('permission:equipos.edit');

	