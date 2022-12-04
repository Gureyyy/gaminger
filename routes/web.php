<?php

use App\Http\Controllers\CocktailController;
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
    session_start();
    if(isset($_SESSION['login'])){
    return redirect('/administrateur');
    }
    else{
        return view('admin');
    }
});

Route::get('/administrateur/createCocktail', function () {
    session_start();
    if(isset($_SESSION['login'])){
        return view('createCocktail');
    }
    else{
        return redirect('/');
    }
});

Route::get('/administrateur/cocktail/delete/{id}', 'CocktailController@deleteCocktail');

Route::get('/administrateur/cocktail/{id}', 'CocktailController@getCocktailById');

Route::post('/administrateur/editCocktail', 'CocktailController@editCocktail');

Route::post('/administrateur/createCocktail', 'CocktailController@createCocktail');

Route::get('/deleteCocktail/{id}', 'CocktailController@deleteCocktail');

Route::get('/editCocktail', function () {
    return view('editCocktail');
});
Route::get('/administrateur/listCocktails', 'CocktailController@getAllCocktailsForEdit');

Route::get('/administrateur/createEvent', function () {
    return view('createEvent');
});

Route::get('/administrateur/editEvent', function () {
    return view('editEvent');
});

Route::post('/administrateur', 'AuthenticationController@connect');
Route::get('/administrateur', function (){
    session_start();
    if(isset($_SESSION['login'])){
        return view('administrateur');
    }
    else{
       return redirect('/');
}
});

Route::get('logout','AuthenticationController@logout');