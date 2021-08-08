<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix'=>'admin', 'as'=>'admin.'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/login', 'Auth\LoginController@showLogin')->name('login');
    Route::post('/login', 'Auth\LoginController@login')->name('doLogin');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});

