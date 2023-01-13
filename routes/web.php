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
    return view('home', [
        'menu' => config('menu'),
        'link' => config('link'),
    ]);
})->name('home');

Route::get('/comics', function () {
    return view('comics', [
        'menu' => config('menu'),
        'comics' => config('comics'),
        'link' => config('link'),
    ]);
})->name('comics');
