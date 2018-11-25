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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts/{id}',['as'=>'posts','uses'=>'PostController@Show']);

Route::get('test-event',['as'=>'testEvent','uses'=>'testEvenController@get']);
Route::post('test-event',['as'=>'testEventPost','uses'=>'testEvenController@store']);

Route::get('test-log', function() {
    Log::info('ahihi do ngok');
});

Route::resource('message', 'MessageController');


//CHAT

Route::get('/', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');