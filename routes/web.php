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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/browse', 'BrowseController@search')->name('search');
Route::get('/album/{id}', 'BrowseController@album')->name('album');

/** CMS routes */
Route::get('/cms', 'CMSController@index')->name('cms_home');
Route::get('/cms/artist', 'CMSController@artist')->name('cms_artist');
Route::get('/cms/album', 'CMSController@album')->name('cms_album');
Route::get('/cms/song', 'CMSController@song')->name('cms_song');

Route::post('/cms/artist/submit', 'CMSController@artistSubmit')->name('cms_artist_submit');
Route::post('/cms/album/submit', 'CMSController@albumSubmit')->name('cms_album_submit');
Route::post('/cms/song/submit', 'CMSController@songSubmit')->name('cms_song_submit');
