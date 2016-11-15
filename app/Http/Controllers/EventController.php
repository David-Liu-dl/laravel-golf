<?php

namespace App\Http\Controllers;
use App\Event;

class EventController extends Controller
{
    public function getAll() {
        $events = Event::where("availability",1) -> get();
        $this->addResourcePrefix($events);

        return view('coming_events')->with("events", $events);
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
