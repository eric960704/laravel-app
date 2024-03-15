<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/123', function () {
    Redis::set('name', 'Vic');
    
    return Redis::get('name');
});