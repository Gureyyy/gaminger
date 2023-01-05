<?php

use App\Http\Controllers\AuthenticationController;
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

Route::get('/mentions', function () {
    return view('mentions');
});

Route::get('/confid', function () {
    return view('confid');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/cocktails', 'CocktailController@getAllCocktails');

Route::get('/events', 'EventController@getAllEvents');

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

/////////////////// COCKTAIL's ROUTES ///////////////////

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

///////////////////////EVENT's ROUTES///////////////////

Route::get('/administrateur/editEvent', function () {
    session_start();
    if(isset($_SESSION['login'])){
    return view('editEvent');
    }
    else{
        return redirect('/');
    }
});

Route::get('/administrateur/createEvent', function () {
    session_start();
    if(isset($_SESSION['login'])){
        return view('createEvent');
    }
    else{
        return redirect('/');
    }
});

Route::post('/administrateur/createEvent', 'EventController@createEvent');

Route::get('/administrateur/event/{id}', 'EventController@getEventById');

Route::get('/administrateur/event/delete/{id}', 'EventController@deleteEvent');

Route::get('/administrateur/events', 'EventController@getAlleventsForEdit');

Route::get('/administrateur/listEvent', 'EventController@getAllEventsForEdit');

Route::post('/administrateur/editEvent', 'EventController@editEvent');

Route::get('logout','AuthenticationController@logout');