<?php

//tipos
	Route::get('tipos', 'TipoController@index')->name('tipos.index')->middleware('permission:tipos.index');

	Route::post('tipos/store', 'TipoController@store')->name('tipos.store')->middleware('permission:tipos.store');

	Route::get('tipos/create', 'TipoController@create')->name('tipos.create')->middleware('permission:tipos.create');

	Route::put('tipos/{tipo}', 'TipoController@update')->name('tipos.update')->middleware('permission:tipos.edit');

	Route::get('tipos/{tipo}', 'TipoController@show')->name('tipos.show')->middleware('permission:tipos.show');

	Route::delete('tipos/{tipo}', 'TipoController@destroy')->name('tipos.destroy')->middleware('permission:tipos.create');

	Route::get('tipos/{tipo}/edit', 'TipoController@edit')->name('tipos.edit')->middleware('permission:tipos.edit');

	Route::post('tipos/create', 'TipoController@password')->name('tipos.password')->middleware('permission:tipos.create');