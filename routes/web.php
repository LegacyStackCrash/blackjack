<?php
use App\Events\NewLobbyChatMessage;
use App\EventObjects\ChatMessage;

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

Route::get('/testr', function () {
    $chatMessage = new ChatMessage(['message' => "Hello, World!"]);
    event((new NewLobbyChatMessage($chatMessage)));
});

Route::post('/lobby/message', 'ChatController@LobbyChatMessage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
