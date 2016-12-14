<?php

namespace App\Http\Controllers;

use App\Package;
use Jenssegers\Agent\Agent as Agent;
use App\Order;
use Mail;
use Excel;
use Carbon\Carbon;

class PackageController extends Controller {

    public function index($id) {
        $package = Package::find($id);
        if (empty($package)) {
            $package = $this->first();
        }
        if (!empty($package)) {
            $package['features'] = explode(";", $package['features']);
        }
        return view('packages')->with("package", $package);
    }

    public function getAll() {
        $packages = Package::all();

        foreach ($packages as $package) {

            if (empty($package)) {
                $package = $this->first();
            }
            if (!empty($package)) {
                $package['features'] = explode(";", $package['features']);
            }
        }


        $Agent = new Agent();

        if ($Agent->isMobile()) {
            return view('mobileViews.packages')->with("packages", $packages);
        } else {
            return view('packages')->with("packages", $packages);
        }
    }

    private function first() {
        $packet = array();
        $packet['title'] = "test";
        $packet['description'] = "test test test test test test test test ";
        $packet['features'] = "1.wee;2.eee;4.ssss;";
        $packet['video_url'] = "https://www.youtube.com/embed/vvxCX4xUik8";
        $packet['price'] = 299.99;
        return $packet;
    }

    public function email() {
        $former_order = array();
        $former_order['total'] = Order::all()->count();
        $month = Carbon::now()->subMonth()->startOfMonth();
        $seven_days = Carbon::now()->subDay(7)->startOfDay();
        $yesterday_start = Carbon::yesterday()->startOfDay();
        $yesterday_end = Carbon::yesterday()->endOfDay();
        $former_order['month'] = Order::whereBetween('created_at', [$month, $yesterday_end])->count();
        $former_order['7days'] = Order::whereBetween('created_at', [$seven_days, $yesterday_end])->count();
        $orders = Order::whereBetween('created_at', [$yesterday_start, $yesterday_end])->get();
        
        //import excel
        $cellData = array();
        $cellData[0] = ['ID', 'Name', 'Phone', 'Hand', 'Email', 'Book Block', 'Booked At'];
        if(!empty($orders)){
            foreach($orders as $value){
                array_push($cellData, [$value->id, $value->name, $value->phone, $value->hand, $value->email, $value->book_block, $value->created_at]);
            }
        }
        Excel::create('Order_List_'.Carbon::yesterday()->toDateString(),function($excel) use ($cellData){
            $excel->sheet('orders', function($sheet) use ($cellData){
                $sheet->rows($cellData);
            });
        })->store('xls', storage_path('excel/exports'));
        
        Mail::send('orders', ['orders' => $orders, 'former_order' => $former_order, 'today' => Carbon::yesterday()->toDateString()], function($message) {
            $to = 'euniceyangjing@gmail.com';
            $message->to($to)->subject("Orders List for ".Carbon::yesterday()->toDateString());
            $message->attach(storage_path('excel/exports/').'Order_List_'.Carbon::yesterday()->toDateString().'.xls');
        });
    }

}
