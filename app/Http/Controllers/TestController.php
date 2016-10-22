<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Input;
use Request;

class TestController extends Controller
{
    public function create(){

        return view('create');
    }

    public function store(){

//        order::create(Request::all());
        print_r(Request::all());
//        return $input;
        return "Saved";
    }
}
