<?php

Route::get('/', 'PagesController@root')->name('root');

Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController', ['only' => ['show', 'create', 'store', 'update', 'edit']]);

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);
Route::post('upload_image', 'UploadsController@uploadImage')->name('uploads.upload_image');
