<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($count = 0; $count<5; $count++){
            $event = new \App\Http\Event();
            $event->title = 'name_'.$count;
            $event->address = 'current here';
            $event->introduction = 'This is event: name_'.$count;
            $event->thumbnail = 'http://i1.wp.com/pmcdeadline2.files.wordpress.com/2016/06/angelababy.jpg';
            $event->picture = 'http://i1.wp.com/pmcdeadline2.files.wordpress.com/2016/06/angelababy.jpg';
            $event->save();
        }
    }
}
