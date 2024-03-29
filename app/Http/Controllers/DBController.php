<?php

namespace App\Http\Controllers;

use App\DayOpenHour;
use App\Http\Requests;
use App\Order;
use App\Event;

class DBController extends Controller
{
    public function getUnavailableDates(){
        $startRange = \Carbon\Carbon::now() -> addDay(0)->format('Y-m-d H:i');

        $endRange = \Carbon\Carbon::now()->addMonth(6)->format('Y-m-d H:i');

        $range = [$startRange, $endRange];
        $orders = Order::whereBetween('book_block', $range)->get();

        $ordersDate = array();
        foreach ($orders as $order){
            array_push($ordersDate, \Carbon\Carbon::parse($order->book_block));
        }
        
        $schedules = array();
        $daysSchedule = DayOpenHour::all();
        foreach($daysSchedule as $schedule){
            $schedules[$schedule['day_of_week']] = $schedule;
        }
        $info = array();
        $info['booked_date'] = $ordersDate;
        $info['schedule'] = $schedules;
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
