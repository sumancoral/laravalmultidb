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

Route::resource('user','UserController');
Route::get('login', 'HomeController@showLogin');
Route::post('login','HomeController@doLogin');
Route::get('dashboard', 'HomeController@showDashboard');
Route::get('logout', 'HomeController@getLogout');