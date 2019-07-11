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

Route::get('profile/create', 'ProfileController@create');
// because am storing that is why i used post storing dat into the database
Route::post('profile/create', 'ProfileController@store')->name('create');

Route::get('profile/index','ProfileController@index')->name('view');
Route::get('profile/details/{id}','ProfileController@details')->name('details');
Route::get('/home','ProfileController@dashboard')->name('dashboard');
Route::get('/profile/manage','ProfileController@manage')->name('manage');

Route::get('profile/manage/{id}','ProfileController@delete')->name('delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/profile/search', 'ProfileController@search');
