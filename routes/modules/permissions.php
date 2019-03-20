<?php

	//permissions
	
	Route::get('permissions', 'PermissionController@index')->name('permissions.index')->middleware('permission:permissions.index');

	Route::post('permissions/store', 'PermissionController@store')->name('permissions.store')->middleware('permission:permissions.create');

	Route::get('permissions/create', 'PermissionController@create')->name('permissions.create')->middleware('permission:permissions.create');

	Route::put('permissions/{permision}', 'PermissionController@update')->name('permissions.update')->middleware('permission:permissions.edit');

	Route::post('permissions/{permision}', 'PermissionController@show')->name('permissions.show')->middleware('permission:permissions.show');

	Route::post('permissions/{permision}', 'PermissionController@destroy')->name('permissions.destroy')->middleware('permission:permissions.create');

	Route::post('permissions/{permision}', 'PermissionController@edit')->name('permissions.edit')->middleware('permission:permissions.edit');