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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{username}','ProfileController@profile');
Route::get('/profile/{username}/edit','ProfileController@edit');
Route::get('/profile/{username}/update','ProfileController@update');

Route::resource('posts','PostsController');
Route::resource('chats','MessageController');
Route::get('chats/{receptor_id}/{emissor_id}', 'MessageController@mostrarConversa');