<?php

//roles
	Route::get('roles', 'RoleController@index')->name('roles.index')->middleware('permission:roles.index');

	Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('permission:roles.store');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.create');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');

	Route::post('roles/create', 'RoleController@password')->name('roles.password')->middleware('permission:roles.create');