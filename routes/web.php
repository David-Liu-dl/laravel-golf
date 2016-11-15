<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/test', function () {
    if (Auth::check()){
        Auth::logout();
        return View::make('home');
    }else{
        return View::make('auth.login');
    }
});

Route::get('/', function () {
    return View::make('home');
});

Route::get('/home', function () {
    return View::make('home');
});

Route::get('/tournament', function () {
    return View::make('tournament');
});

Route::get('/casual', function () {
    return View::make('casual');
});

Route::get('/contactus', function () {
    return View::make('contactus');
});

Route::get('/cocktail', function () {
    return View::make('golf_and_cocktail_bar');
});

Route::get('/price', function () {
    return View::make('price_detail');
});

Route::get('/coming_events', function () {
    return View::make('coming_events');
});

Route::post('/orders', 'TestController@storeOrders');


Route::post('/enquiry-form', 'TestController@storeEnquiry');


Route::get('/getUnavailableDates', 'DBController@getUnavailableDates');
Route::get('/getAllAvailableEvents', 'DBController@getAllAvailableEvents');
Route::get('/academy', 'PackageController@getAll');

Auth::routes();

//Route::get('/home', 'HomeController@index');
