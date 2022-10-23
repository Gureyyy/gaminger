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
    return view('accueil');
});

Route::get('gaminger/public/accueil', function () {
    return view('accueil');
});

Route::get('gaminger/public/cocktails', function () {
    return view('cocktails');
});

Route::get('gaminger/public/events', function () {
    return view('events');
});

Route::get('gaminger/public/contact', function () {
    return view('contact');
});