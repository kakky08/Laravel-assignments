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

// ミドルウェア (ログイン前)
Route::group(['middleware' => ['guest']], function ()
{
    // ログインフォーム
    Route::get('/', 'auth\LoginController@showLogin')->name('show.login');
    // ログイン処理
    Route::post('login', 'auth\LoginController@login')->name('login');

    // 新規登録フォーム
    Route::get('/signin', 'auth\RegisterController@showRegister')->name('show.register');
    // 新規登録処理
    Route::post('register', 'auth\RegisterController@register')->name('register');
});


// ミドルウェア (ログイン後)
Route::group(['middleware' => ['auth']], function ()
{
    // ログアウト
    Route::post('logout', 'auth\LogoutController@logout')->name('logout');

    // ホーム画面
    Route::get('/home', 'HomeController@showHome')->name('show.home');

});
