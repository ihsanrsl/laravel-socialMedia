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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home', function() {
    return view('welcome');
});
Route::get('/profile/{username}/setting', 'profileController@set');
Route::put('/profile/{username}', 'profileController@author');
Route::get('/profile/{username}/{follow}', 'profileController@follow');

Route::get('/post/{id}/edit', 'PostController@edit');
Route::put('/post/{id}', 'PostController@update');
Route::get('/post/{id}', 'PostController@detailPost');

Route::get('/profile/{username}', 'profileController@profile');
Route::delete('/post/{id}', 'PostController@deletePost');

Route::get('/post/{id}/comments', 'PostController@comment');
Route::post('/post/{id}/comments', 'PostController@makeComment');

Route::get('/post/{id}/{likes}', 'PostController@like');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/create', 'PostController@create');
Route::post('/post','PostController@store_comment');

Route::post('/','PostController@store');
Route::get('/', 'PostController@index');
