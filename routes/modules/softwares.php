<?php

//softwares
	Route::get('softwares', 'SoftwareController@index')->name('softwares.index')->middleware('permission:softwares.index');

	Route::post('softwares/store', 'SoftwareController@store')->name('softwares.store')->middleware('permission:softwares.create');

	Route::get('softwares/create', 'SoftwareController@create')->name('softwares.create')->middleware('permission:softwares.create');

	Route::put('softwares/{software}', 'SoftwareController@update')->name('softwares.update')->middleware('permission:softwares.edit');

	Route::post('softwares/{software}', 'SoftwareController@show')->name('softwares.show')->middleware('permission:softwares.show');

	Route::post('softwares/{software}', 'SoftwareController@destroy')->name('softwares.destroy')->middleware('permission:softwares.create');

	Route::post('softwares/{software}', 'SoftwareController@edit')->name('softwares.edit')->middleware('permission:softwares.edit');