<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Order;
use App\Event;

class DBController extends Controller
{
    public function getUnavailableDates(){
        $startRange = \Carbon\Carbon::now() -> addDay(-1)->format('Y-m-d h:m');

        $endRange = \Carbon\Carbon::now()->addMonth(3)->format('Y-m-d h:m');

        $range = [$startRange, $endRange];
        $orders = Order::whereBetween('book_block', $range)->get();

        $ordersDate = array();
        foreach ($orders as $order){
            array_push($ordersDate, \Carbon\Carbon::parse($order->book_block));
        }

        return response()->json($ordersDate);
    }

    public function getAllAvailableEvents(){
        $events = Event::where("availability",1) -> get();
        $this->addResourcePrefix($events);
        return response()->json($events);
    }

    private function addResourcePrefix($objs){
        foreach ($objs as $obj){
            if ($obj instanceof Event){
                $obj->picture = "uploads/". ($obj->picture);
                $obj->cover = "uploads/". ($obj->cover);
            }else{
                break;
            }
        }
    }
}
