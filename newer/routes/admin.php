<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'AdminController@dashboard')->name('index');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/translation',  'AdminController@translation')->name('translation');
/*
Route::get('/admins/list',  'AdminController@admin_list')->name('admin.list');
Route::post('/admins/list',  'AdminController@create_admin')->name('admin.create');
Route::post('/admins/update',  'AdminController@update_admin')->name('admin.update');
Route::post('/admins/update',  'AdminController@update_admin')->name('admin.update');
*/

Route::resource('user', 'Resource\UserResource');
Route::resource('admin', 'Resource\AdminResource');
Route::resource('idea', 'Resource\IdeaResource');
Route::get('profile', 'AdminController@profile')->name('profile');
Route::post('profile', 'AdminController@profile_update')->name('profile.update');
Route::get('password', 'AdminController@password')->name('password');
Route::post('password', 'AdminController@password_update')->name('password.update');
// Static Pages - Post updates to pages.update when adding new static pages.

Route::get('/pages', 'AdminController@pages')->name('pages.list');
Route::get('/pages/edit/{id}', 'AdminController@editpage')->name('page.edit');
Route::post('/update', 'AdminController@update_page')->name('pages.update');
