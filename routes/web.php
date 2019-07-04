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

Route::get('/', 'GuestController@showWelcome')->name('welcome');
Route::post('/', 'GuestController@pickName');
Route::put('/', 'GuestController@visit');

Route::get('/guest', function () {
    return view('guestbook');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/daftarTamu', 'GuestController@index')->name('daftarTamu');
Route::post('/daftarTamu', 'GuestController@store');

Route::get('/login', function () {
    return view('loginTamu');
});

