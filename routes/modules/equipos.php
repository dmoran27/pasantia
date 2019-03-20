<?php

//equipos
	Route::get('equipos', 'EquipoController@index')->name('equipos.index')->middleware('permission:equipos.index');

	Route::post('equipos/store', 'EquipoController@store')->name('equipos.store')->middleware('permission:equipos.create');

	Route::get('equipos/create', 'EquipoController@create')->name('equipos.create')->middleware('permission:equipos.create');

	Route::put('equipos/{equipo}', 'EquipoController@update')->name('equipos.update')->middleware('permission:equipos.edit');

	Route::post('equipos/{equipo}', 'EquipoController@show')->name('equipos.show')->middleware('permission:equipos.show');

	Route::post('equipos/{equipo}', 'EquipoController@destroy')->name('equipos.destroy')->middleware('permission:equipos.create');

	Route::post('equipos/{equipo}', 'EquipoController@edit')->name('equipos.edit')->middleware('permission:equipos.edit');
