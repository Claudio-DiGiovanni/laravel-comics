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

Route::get('/characters', function () {
    return view('characters', [
        'menu' => config('menu'),
        'link' => config('link'),
    ]);
})->name('characters');

Route::get('/movies', function () {
    return view('movies', [
        'menu' => config('menu'),
        'link' => config('link'),
    ]);
})->name('movies');

Route::get('/tv', function () {
    return view('tv', [
        'menu' => config('menu'),
        'link' => config('link'),
    ]);
})->name('tv');

Route::get('/games', function () {
    return view('games', [
        'menu' => config('menu'),
        'link' => config('link'),
    ]);
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles', [
        'menu' => config('menu'),
        'link' => config('link'),
    ]);
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos', [
        'menu' => config('menu'),
        'link' => config('link'),
    ]);
})->name('videos');

Route::get('/fans', function () {
    return view('fans', [
        'menu' => config('menu'),
        'link' => config('link'),
    ]);
})->name('fans');

Route::get('/shop', function () {
    return view('shop', [
        'menu' => config('menu'),
        'link' => config('link'),
    ]);
})->name('shop');
