<?php
//perifericos
	Route::get('perifericos', 'PerifericoController@index')->name('perifericos.index')->middleware('permission:perifericos.index');

	Route::post('perifericos/store', 'PerifericoController@store')->name('perifericos.store')->middleware('permission:perifericos.create');

	Route::get('perifericos/create', 'PerifericoController@create')->name('perifericos.create')->middleware('permission:perifericos.create');

	Route::put('perifericos/{periferico}', 'PerifericoController@update')->name('perifericos.update')->middleware('permission:perifericos.edit');

	Route::post('perifericos/{periferico}', 'PerifericoController@show')->name('perifericos.show')->middleware('permission:perifericos.show');

	Route::post('perifericos/{periferico}', 'PerifericoController@destroy')->name('perifericos.destroy')->middleware('permission:perifericos.create');

	Route::post('perifericos/{periferico}', 'PerifericoController@edit')->name('perifericos.edit')->middleware('permission:perifericos.edit');