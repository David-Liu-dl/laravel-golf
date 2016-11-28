<?php

namespace App\Http\Controllers;
use App\Event;
use Jenssegers\Agent\Agent;

class EventController extends Controller
{
    public function getAll() {
        $events = Event::where("availability",1) -> get();
        $this->addResourcePrefix($events);

        $agent = new Agent();
        if ($agent->isMobile()){
            return view('mobileViews.coming_events')->with("events", $events);
        }else{
            return view('coming_events')->with("events", $events);
        }
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
