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


Route::get('/', 'WebsiteController@home');
Route::get('/home', 'WebsiteController@home');

Route::get('/program', 'WebsiteController@program');
Route::get('/news', 'WebsiteController@news');
Route::get('/about', 'WebsiteController@about');
Route::get('/staff', 'WebsiteController@teachers');

// alias in route login should be defined, so auth middleware could detect which login page user should be redirected when not logged in but trying to force dashboard
Route::get('/login',  [ 'as' => 'login', 'uses' => 'WebsiteController@login_page']);
Route::post('/login', 'WebsiteController@login_handle');
Route::get('/logout', 'Dashboard\DashboardController@logout');

Route::get('/dashboard',  'DashboardController@home');

Route::get('/dashboard/users',  'UserController@index');
Route::get('/dashboard/users/add',  'UserController@add');
Route::post('/dashboard/users/save',  'UserController@save');
Route::get('/dashboard/users/edit/{id}',  'UserController@edit');
Route::post('/dashboard/users/update',  'UserController@update');
Route::get('/dashboard/users/delete/{id}',  'UserController@delete');

Route::get('/executive',  'DashboardController@executive');
Route::get('/student',  'DashboardController@student');
Route::get('/dashboard/expense',  'DashboardController@expense');
Route::get('/dashboard/income',  'DashboardController@income');

#Auth
// alias is used to redirect user to login page when not logged in
Route::get('unallowed', [ 'as' => 'unallowed', 'uses' => 'GeneralController@unallowed']);