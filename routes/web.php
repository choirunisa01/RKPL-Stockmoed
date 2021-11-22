<?php

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
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/viewStock', function () {
    return view('viewStock');
});

Route::get('/notif', function () {
    return view('notif');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/setting', function () {
    return view('setting');
});