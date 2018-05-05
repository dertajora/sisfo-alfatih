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

Route::get('/home', 'DashboardController@home');
Route::get('/login',  'WebsiteController@login_page');
Route::get('/executive',  'DashboardController@executive');
Route::get('/student',  'DashboardController@student');
Route::get('/expense',  'DashboardController@expense');
Route::get('/income',  'DashboardController@income');