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

<<<<<<< HEAD
Route::get('/', function () {
=======
use App\Http\Controllers\profileController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function() {
>>>>>>> 55f6092374795ec31a6ebdfb5fe64925040f9bbb
    return view('homescreen');
});
Route::get('/home', function() {
    return view('welcome');
});
<<<<<<< HEAD
// Route::get('/post', function() {
//     return view('detailedPost');
// });
=======
Route::get('/profile/{username}/setting', 'profileController@set');
Route::put('/profile/{username}', 'profileController@author');
Route::get('/profile/{username}/{follow}', 'profileController@follow');
>>>>>>> 55f6092374795ec31a6ebdfb5fe64925040f9bbb
Route::get('/post/edit', function() {
    return view('editPost');
});
Route::get('/profile/{username}', 'profileController@profile');
Route::get('/post/comment', function() {
    return view('comment');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('/post/create', 'PostController@create');
Route::post('/post','PostController@store_comment');
Route::get('/post', 'PostController@index_comment');
Route::post('/','PostController@store');
Route::get('/', 'PostController@index');
=======
>>>>>>> 55f6092374795ec31a6ebdfb5fe64925040f9bbb
