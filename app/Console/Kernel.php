<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Mail;
use Excel;
use Carbon\Carbon;
use App\Order;

class Kernel extends ConsoleKernel {

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
            //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule) {
        // $schedule->command('inspire')
        //          ->hourly();
//        $schedule->command('queue:work')->everyMinute();
//        $schedule->command('help')->everyMinute();

        $schedule->call(function() {
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
            if (!empty($orders)) {
                foreach ($orders as $value) {
                    array_push($cellData, [$value->id, $value->name, $value->phone, $value->hand, $value->email, $value->book_block, $value->created_at]);
                }
            }
            Excel::create('Order_List_' . Carbon::yesterday()->toDateString(), function($excel) use ($cellData) {
                $excel->sheet('orders', function($sheet) use ($cellData) {
                    $sheet->rows($cellData);
                });
            })->store('xls', storage_path('excel/exports'));

            Mail::send('orders', ['orders' => $orders, 'former_order' => $former_order, 'today' => Carbon::yesterday()->toDateString()], function($message) {
                $to = 'info@golfplus.net.au';
                $message->to($to)->subject("Orders List for " . Carbon::yesterday()->toDateString());
                $message->attach(storage_path('excel/exports/') . 'Order_List_' . Carbon::yesterday()->toDateString() . '.xls');
            });
        })->dailyAt('01:00');
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands() {
        require base_path('routes/console.php');
    }

}
