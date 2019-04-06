<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','LoginController@index');
Route::post('postlogin','LoginController@postLogin');
Route::get('dashboard','AuthController@getRoot');

//superadmin
Route::get('user/json','ManageAdminController@admintb')->name('user/json');
Route::get('admin','ManageAdminController@index');
Route::POST('addPost','ManageAdminController@addPost');
Route::POST('editPost','ManageAdminController@editPost');
Route::POST('deletePost','ManageAdminController@deletePost');
Route::get('jurusan','JurusanController@index');
