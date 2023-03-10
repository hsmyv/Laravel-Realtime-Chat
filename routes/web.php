<?php

use App\Events\WebsocketDemoEvent;
use App\Http\Controllers\ChatsController;
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
    broadcast(new WebsocketDemoEvent('some data'));
    return view('welcome');
});

Route::get('/chats', [ChatsController::class, 'index']);
Route::get('/messages', [ChatsController::class, 'fetchMessages']);
Route::post('/messages', [ChatsController::class, 'sendMessage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/post-like', [App\Http\Controllers\HomeController::class, 'postLike']);
Route::post('/broadcasting/auth', function () {
    return Auth::user();
});
