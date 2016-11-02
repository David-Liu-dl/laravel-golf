<?php

namespace App\Http\Controllers;
use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller {

    public function index($id) {
        $package = Package::find($id);
        if(empty($package)){
            $package = $this->first();
        }
        if(!empty($package)){
            $package['features'] = explode(";", $package['features']);
        }
        return view('packages')->with("package", $package);
    }
    
    public function initial() {
        $package = Package::orderBy('id', 'desc')->first();
        if(empty($package)){
            $package = first();
        }
        if(!empty($package)){
            $package['features'] = explode(";", $package['features']);
        }
        return view('packages')->with("package", $package);
    }
    
    function first(){
        $packet = array();
        $packet['title'] = "test";
        $packet['description'] = "test test test test test test test test ";
        $packet['features'] = "1.wee;2.eee;4.ssss;";
        $packet['video_url'] = "https://www.youtube.com/embed/vvxCX4xUik8";
        $packet['price'] = 299.99;
        return $packet;
    }
}