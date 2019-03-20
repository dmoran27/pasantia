<?php

//roles
	Route::get('roles', 'RoleController@index')->name('roles.index')->middleware('permission:roles.index');

	Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('permission:roles.create');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

	Route::post('roles/{role}', 'RoleController@show')->name('roles.show')->middleware('permission:roles.show');

	Route::post('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.create');

	Route::post('roles/{role}', 'RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');