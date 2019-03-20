<?php

//users
	Route::get('users', 'UserController@index')->name('users.index')->middleware('permission:users.index');

	Route::post('users/store', 'UserController@store')->name('users.store')->middleware('permission:users.store');

	Route::get('users/create', 'UserController@create')->name('users.create')->middleware('permission:users.create');

	Route::put('users/{user}', 'UserController@update')->name('users.update')->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')->middleware('permission:users.create');

	Route::post('users/{user}', 'UserController@edit')->name('users.edit')->middleware('permission:users.edit');