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

Route::get('/counter', function () {
    return view('counter');
});


Route::get('/visited', 'GuestController@visited')->name('visited');
Route::get('/unvisited', 'GuestController@unvisited')->name('unvisited');

Route::get('/daftarTamu', 'GuestController@index')->name('daftarTamu');
Route::post('/daftarTamu', 'GuestController@store');

Route::get('/all', 'GuestController@allGuest')->name('allGuest');



Route::get('/unexpected', 'GuestController@unexpectedIndex')->name('unexpected');
Route::post('/unexpected', 'GuestController@unexpectedStore');

Route::get('/login', 'AppController@login')->name('login');
Route::post('/login', 'AppController@loginSubmit');

Route::get('/home', 'AppController@home')->name('home');
Route::get('/game', 'AppController@game')->name('game');

Route::get('/displayScore', 'AppController@displayScore')->name('displayScore');
Route::get('/score', 'AppController@score');

Route::get('/tables', 'AppController@pickTable');
Route::post('/gallery', 'AppController@showGallery');
Route::get('/gallerydetail', function () {
    return view('gallery-detail');
});