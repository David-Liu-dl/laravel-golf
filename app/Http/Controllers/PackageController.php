<?php

namespace App\Http\Controllers;
use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller {

    public function index($id) {
        $package = Package::find($id);
        if(!empty($package)){
            $package['features'] = explode(";", $package['features']);
        }
        return view('packages')->with("package", $package);
    }
}