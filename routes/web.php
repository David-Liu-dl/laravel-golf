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
use Jenssegers\Agent\Agent;

Route::get('/mobile', function () {
    $agent = new Agent();

    if ($agent->isMobile()){
        return "";
    }else{
        return View::make('home');
    }
});


Route::get('/test', function () {
//    if (Auth::check()){
//        Auth::logout();
//        return View::make('home');
//    }else{
//        return View::make('auth.login');
//    }
    return View::make('mobileViews.test');

});

Route::get('/', function () {
    $agent = new Agent();
    if ($agent->isMobile()){
        return View::make('mobileViews.home');
    }else{
        return View::make('home');
    }
    
});

Route::get('/home', function () {
    $agent = new Agent();
    if ($agent->isMobile()){
        return View::make('mobileViews.home');
    }else{
        return View::make('home');
    }
});

Route::get('/tournament', function () {
    $agent = new Agent();

    if ($agent->isMobile()){
        return View::make('mobileViews.tournament');
    }else{
        return View::make('tournament');
    }
});

Route::get('/casual', function () {
    return View::make('casual');
});

Route::get('/contactus', function () {
    $agent = new Agent();

    if ($agent->isMobile()){
        return View::make('mobileViews.contactus');
    }else{
        return View::make('contactus');
    }
});

Route::get('/cocktail', function () {
    $agent = new Agent();

    if ($agent->isMobile()){
        return View::make('mobileViews.golf_and_cocktail_bar');
    }else{
        return View::make('golf_and_cocktail_bar');

    }
});

Route::get('/price', function () {
    $agent = new Agent();

    if ($agent->isMobile()){
        return View::make('mobileViews.price_detail');
    }else{
        return View::make('price_detail');

    }
});

Route::get('/coming_events', "EventController@getAll");

Route::post('/orders', 'OrderController@storeOrders');

Route::post('/enquiry-form', 'EnquiryController@storeEnquiry');


Route::get('/getUnavailableDates', 'DBController@getUnavailableDates');
Route::get('/getAllAvailableEvents', 'DBController@getAllAvailableEvents');
Route::get('/academy', 'PackageController@getAll');

Auth::routes();
