<?php

$router = app('admin.router');
$router->get('/', 'HomeController@index');
$router->resource('dayopenhours', DayOpenHourController::class);
$router->resource('packages', PackageController::class);
$router->resource('orders', OrderController::class);
$router->resource('enquires', EnquiryController::class);
$router->resource('customers', CustomerController::class);
$router->resource('events', EventController::class);
$router->resource('users', UserController::class);
