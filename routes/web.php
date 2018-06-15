<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home',[
  'uses' => 'HomeController@index',
  'as' => 'home'
]);

Route::get('/admin', [
  'uses' => 'Admin\AdminController@index',
  'as' => 'admin.index'
]);

Route::get('/admin/user/{id}', [
  'uses' => 'Admin\AdminController@users',
  'as' => 'admin.user'
]);
