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

Route::get('/', function () {
    return View::make('golf_and_cocktail_bar');
//    return View::make('book');
//    return View::make('contactus');
//    return View::make('price_detail');
});
Route::post('/', 'TestController@storeEnquiry');

//Route::post('/', 'TestController@storeOrders');


//Route::get('/enquiry-form', 'TestController@storeEnquiry');
//Route::post('/enquiry-form', 'TestController@storeEnquiry');
//Route::post('/enquiry-form', function (){
//    return View::make('book');
//});


Route::get('/data', function () {
    $startRange = \Carbon\Carbon::now() -> addDay(-1)->format('Y-m-d h:m');

    $endRange = \Carbon\Carbon::now()->addMonth(3)->format('Y-m-d h:m');

    $range = [$startRange, $endRange];
    $orders = App\Order::whereBetween('book_block', $range)->get();

    $ordersDate = array();
    foreach ($orders as $order){
        array_push($ordersDate, \Carbon\Carbon::parse($order->book_block));
    }

    return response()->json($ordersDate);
});

