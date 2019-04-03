<?php

//permissions
	Route::get('permissions', 'PermissionController@index')->name('permissions.index')->middleware('permission:permissions.index');

	Route::post('permissions/store', 'PermissionController@store')->name('permissions.store')->middleware('permission:permissions.store');

	Route::get('permissions/create', 'PermissionController@create')->name('permissions.create')->middleware('permission:permissions.create');

	Route::put('permissions/{permission}', 'PermissionController@update')->name('permissions.update')->middleware('permission:permissions.edit');

	Route::get('permissions/{permission}', 'PermissionController@show')->name('permissions.show')->middleware('permission:permissions.show');

	Route::delete('permissions/{permission}', 'PermissionController@destroy')->name('permissions.destroy')->middleware('permission:permissions.create');

	Route::get('permissions/{permission}/edit', 'PermissionController@edit')->name('permissions.edit')->middleware('permission:permissions.edit');

	Route::post('permissions/create', 'PermissionController@password')->name('permissions.password')->middleware('permission:permissions.create');