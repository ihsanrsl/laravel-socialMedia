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
    return view('homescreen');
});
Route::get('/home', function() {
    return view('welcome');
});
// Route::get('/post', function() {
//     return view('detailedPost');
// });
Route::get('/post/edit', function() {
    return view('editPost');
});
Route::get('/profile', function() {
    return view('profile');
});
Route::get('/post/comment', function() {
    return view('comment');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/create', 'PostController@create');
Route::post('/post','PostController@store_comment');
Route::get('/post', 'PostController@index_comment');
Route::post('/','PostController@store');
Route::get('/', 'PostController@index');
