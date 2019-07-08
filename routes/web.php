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

Route::get('/home', function () {
    return view('home');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/game', function () {
    return view('gameCounter');
});

Route::get('/counter', function () {
    return view('counter');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/gallerydetail', function () {
    return view('gallery-detail');
});

Route::get('/daftarTamu', 'GuestController@index')->name('daftarTamu');
Route::post('/daftarTamu', 'GuestController@store');

Route::get('/unexpected', 'GuestController@unexpectedIndex')->name('unexpected');
Route::post('/unexpected', 'GuestController@unexpectedStore');

Route::get('/login', function () {
    return view('loginTamu');
});

