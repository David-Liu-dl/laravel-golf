<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($count = 0; $count<5; $count++){
            $package = new \App\Package();
            $package->title = 'THINK&SCORE LIKE A PRO ' . $count;
            $package->priority = 5 - $count;
            $package->description = 'A course management masterclass with a Tour Professional including use of course guides and conditions analysis';
            $package->features = '5 hours tour;2 drinks;1 senssion';
            $package->video_url = "https://www.youtube.com/embed/vvxCX4xUik8";
            $package->price = 189;
            $package->save();
        }
    }

}
