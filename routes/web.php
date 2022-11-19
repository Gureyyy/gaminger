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

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/cocktails', 'CocktailController@getAllCocktails');

Route::get('/events', function () {
    return view('events');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/createCocktail', function () {
    return view('createCocktail');
});

Route::post('/administrateur/createCocktail', 'CocktailController@createCocktail');

Route::get('/deleteCocktail/{id}', 'CocktailController@deleteCocktail');

Route::get('/editCocktail', function () {
    return view('editCocktail');
});

Route::get('/administrateur/editCocktail/{id}', 'CocktailController@editCocktail');

Route::get('/createEvent', function () {
    return view('createEvent');
});

Route::get('/editEvent', function () {
    return view('editEvent');
});

Route::post('/administrateur', 'Authentication@connect');
Route::get('/administrateur', function (){
    return view('administrateur');
});