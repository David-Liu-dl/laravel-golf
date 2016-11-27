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

        for($count = 1; $count<8; $count++){
            $day = new \App\DayOpenHour();
            $day->day_of_week = $count;
            $day->open_at = DateTime::createFromFormat($format, '11:00:00');
            $day->close_at = DateTime::createFromFormat($format, '23:00:00');
            $day->save();
        }
    }
}
