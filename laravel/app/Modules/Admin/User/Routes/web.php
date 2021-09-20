<?php

Route::group(['prefix' => 'users', 'middleware' => []], function () {
    Route::get('/', 'usersController@index')->name('users.index');
    Route::get('/create', 'usersController@create')->name('users.create');
    Route::post('/', 'usersController@store')->name('users.store');
    Route::get('/{user}', 'usersController@show')->name('users.read');
    Route::get('/edit/{user}', 'usersController@edit')->name('users.edit');
    Route::put('/{user}', 'usersController@update')->name('users.update');
    Route::delete('/{user}', 'usersController@destroy')->name('users.delete');
});