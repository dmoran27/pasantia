<?php

//perifericos
	Route::get('perifericos', 'PerifericoController@index')->name('perifericos.index')->middleware('permission:perifericos.index');

	Route::post('perifericos/store', 'PerifericoController@store')->name('perifericos.store')->middleware('permission:perifericos.store');

	Route::get('perifericos/create', 'PerifericoController@create')->name('perifericos.create')->middleware('permission:perifericos.create');

	Route::put('perifericos/{periferico}', 'PerifericoController@update')->name('perifericos.update')->middleware('permission:perifericos.edit');

	Route::get('perifericos/{periferico}', 'PerifericoController@show')->name('perifericos.show')->middleware('permission:perifericos.show');

	Route::delete('perifericos/{periferico}', 'PerifericoController@destroy')->name('perifericos.destroy')->middleware('permission:perifericos.create');

	Route::get('perifericos/{periferico}/edit', 'PerifericoController@edit')->name('perifericos.edit')->middleware('permission:perifericos.edit');
