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

Route::resource('chat-mess', 'chatController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//test pusher
Route::get('/pusher', function() {
    event(new App\Events\HelloPusherEvent('Hi there Pusher!'));
    return "Event has been sent!";
});




Route::get('/', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');