<?php

namespace App\Http\Controllers;

use App\DayOpenHour;
use App\Http\Requests;
use App\Order;
use App\Event;

class DBController extends Controller
{
    public function getUnavailableDates(){
        $startRange = \Carbon\Carbon::now() -> addDay(-1)->format('Y-m-d H:i');

        $endRange = \Carbon\Carbon::now()->addMonth(3)->format('Y-m-d H:i');

        $range = [$startRange, $endRange];
        $orders = Order::whereBetween('book_block', $range)->get();

        $ordersDate = array();
        foreach ($orders as $order){
            array_push($ordersDate, \Carbon\Carbon::parse($order->book_block));
        }

        $daysSchedule = DayOpenHour::all();
        $info = array();
        $info['booked_date'] = $ordersDate;
        $info['schedule'] = $daysSchedule;

        return response()->json($info);
    }

    public function getAllAvailableEvents(){
        $events = Event::where("availability",1) -> orderBy('priority', 'desc') -> get();
        $this->addResourcePrefix($events);
        return response()->json($events);
    }

    private function addResourcePrefix($objs){
        foreach ($objs as $obj){
            if ($obj instanceof Event){
                $obj->originalImg = "storage/". ($obj->originalImg);
                $obj->coverImg = "storage/". ($obj->coverImg);
            }else{
                break;
            }
        }
    }
}
