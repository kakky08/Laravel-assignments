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

Route::get('/', 'auth\LoginController@showLogin')->name('show.login');
Route::post('logine', 'auth\LoginController@login')->name('login');

Route::get('/signin', 'auth\RegisterController@showRegister')->name('show.register');
Route::post('register', 'auth\RegisterController@register')->name('register');

Route::get('/home', 'HomeController@showHome')->name('show,home');
