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
    return view('content.masthead');
})->name('masthead');

Route::get('/gallery', function () {
    return view('content.gallery');
})->name('gallery');

Route::get('/about', function () {
    return view('content.about');
})->name('about');


Route::get('/contact', function () {
    return view('content.contact');
})->name('contact');

