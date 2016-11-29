<?php

use Illuminate\Database\Seeder;

class OpenHourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $format = 'H:i:s';

        $titles = ['SUN','MON','TUE','WED','TUR','FRI','SAT',];
        for($count = 0; $count<7; $count++){
            $day = new \App\DayOpenHour();
            $day->day_of_week = $count;
            $day->title = $titles[$count];
            $day->open_at = DateTime::createFromFormat($format, '11:00:00');
            $day->close_at = DateTime::createFromFormat($format, '23:00:00');
            $day->save();
        }
    }
}
