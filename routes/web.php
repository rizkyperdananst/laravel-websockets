<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-event', function () {
    // broadcast(new \App\Events\HelloEvent('Hello World!'))->toOthers();
    $text = 'Hello ini text';
    broadcast(new \App\Events\HelloEvent($text));
});