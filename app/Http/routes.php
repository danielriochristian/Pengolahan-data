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
Route::post('logout','LoginController@logout');
Route::get('dashboard','AuthController@getRoot');
Route::get('mahasiswa','MahasiswaController@index');
Route::post('mahasiswa/upload','MahasiswaController@store');
Route::get('formisian','FormIsianController@index');
Route::get('formisian/{id}/edit','FormIsianController@edit');
Route::put('formisian/{id}','FormIsianController@update');
Route::get('mhs/json','FormIsianController@mhstb')->name('mhs/json');


//superadmin
Route::get('user/json','ManageAdminController@admintb')->name('user/json');
Route::get('admin','ManageAdminController@index');
Route::POST('addPost','ManageAdminController@addPost');
Route::POST('editPost','ManageAdminController@editPost');
Route::POST('deletePost','ManageAdminController@deletePost');
Route::get('jurusan','JurusanController@index');
Route::get('jurusan/json','JurusanController@jurusantb')->name('jurusan/json');
Route::POST('addJurusan','JurusanController@addJurusan');
Route::POST('editJurusan','JurusanController@editJurusan');
Route::POST('deleteJurusan','JurusanController@deleteJurusan');
