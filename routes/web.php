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
use Illuminate\Support\Facades\Redis;

//pake pub/sub laravel
Route::get('/publish-send-queue-email', function(){
    Redis::publish('send_email', json_encode(['email' => 'rachmathidayat.dev@gmail.com', 'created_at' => now()]));
});
//sampai sini
