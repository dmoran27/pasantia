<?php

//dependencias
	Route::get('dependencias', 'DependenciasController@index')->name('dependencias.index')->middleware('permission:dependencias.index');

	Route::post('dependencias/store', 'DependenciasController@store')->name('dependencias.store')->middleware('permission:dependencias.store');

	Route::get('dependencias/create', 'DependenciasController@create')->name('dependencias.create')->middleware('permission:dependencias.create');

	Route::put('dependencias/{dependencia}', 'DependenciasController@update')->name('dependencias.update')->middleware('permission:dependencias.edit');

	Route::get('dependencias/{dependencia}', 'DependenciasController@show')->name('dependencias.show')->middleware('permission:dependencias.show');

	Route::delete('dependencias/{dependencia}', 'DependenciasController@destroy')->name('dependencias.destroy')->middleware('permission:dependencias.create');

	Route::get('dependencias/{dependencia}/edit', 'DependenciasController@edit')->name('dependencias.edit')->middleware('permission:dependencias.edit');

	Route::post('dependencias/create', 'DependenciasController@password')->name('dependencias.password')->middleware('permission:dependencias.create');