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
    $startRange = \Carbon\Carbon::now() -> addDay(-1)->format('Y-m-d h:m');

    $endRange = \Carbon\Carbon::now()->addMonth(3)->format('Y-m-d h:m');

    $range = [$startRange, $endRange];
    $orders = App\Order::whereBetween('book_block', $range)->get();

    $ordersDate = array();
    foreach ($orders as $order){
//        $date = new DateTime($order->book_block);

//        array_push($ordersDate, $date);
//        print_r(\Carbon\Carbon::parse($order->book_block));
        array_push($ordersDate, \Carbon\Carbon::parse($order->book_block));

    }


    return View::make('test',compact('ordersDate'));
});

//Route::get('/','TestController@create');



Route::get('/contactus.blade.php', function () {
    return View('contactus');
});

Route::get('customer', function () {
    $customer = App\Customer::find(1);
    print_r($customer);
});

Route::post('/', 'TestController@store');