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

use App\Http\Controllers\profileController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function() {
    return view('homescreen');
});
Route::get('/post', function() {
    return view('detailedPost');
});
Route::get('/profile/{username}/setting', 'profileController@set');
Route::put('/profile/{username}', 'profileController@author');
Route::get('/post/edit', function() {
    return view('editPost');
});
Route::get('/profile/{username}', 'profileController@profile');
Route::get('/post/comment', function() {
    return view('comment');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
