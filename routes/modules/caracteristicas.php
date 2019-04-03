<?php

//caracteristicas
	Route::get('caracteristicas', 'CaracteristicaController@index')->name('caracteristicas.index')->middleware('permission:caracteristicas.index');

	Route::post('caracteristicas/store', 'CaracteristicaController@store')->name('caracteristicas.store')->middleware('permission:caracteristicas.store');

	Route::get('caracteristicas/create', 'CaracteristicaController@create')->name('caracteristicas.create')->middleware('permission:caracteristicas.create');

	Route::put('caracteristicas/{caracteristica}', 'CaracteristicaController@update')->name('caracteristicas.update')->middleware('permission:caracteristicas.edit');

	Route::get('caracteristicas/{caracteristica}', 'CaracteristicaController@show')->name('caracteristicas.show')->middleware('permission:caracteristicas.show');

	Route::delete('caracteristicas/{caracteristica}', 'CaracteristicaController@destroy')->name('caracteristicas.destroy')->middleware('permission:caracteristicas.create');

	Route::get('caracteristicas/{caracteristica}/edit', 'CaracteristicaController@edit')->name('caracteristicas.edit')->middleware('permission:caracteristicas.edit');

	Route::post('caracteristicas/create', 'CaracteristicaController@password')->name('caracteristicas.password')->middleware('permission:caracteristicas.create');