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

Route::get('/', 'LoginController@index')->name('login');

Route::get('login', 'LoginController@showLogin')->name('userLogin');

Route::post('login', 'LoginController@login')->name('actionLogin');

Route::get('/blog', 'BlogController@showBlog')->name('show.blog');

Route::get('/logout', 'LoginController@logout')->name('logout');
