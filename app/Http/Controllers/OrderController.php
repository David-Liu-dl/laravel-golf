<?php

namespace App\Http\Controllers;

use App\Order;
use Mail;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class OrderController extends Controller
{
    public function create(){

        return view('create');
    }

    public function storeOrders(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $hand = $request->input('hand');
        $selected_blocks = json_decode($request->input('selected_blocks'), true);

        $results = $this->checkOrderValidity($selected_blocks);

        if ($results['validity']){
            foreach ($selected_blocks['slots'] as $selected_block){
                $order = new Order();
                $order->name = $name;
                $order->phone = $phone;
                $order->email = $email;
                $order->hand = $hand;
                $date = \Carbon\Carbon::parse($selected_block)->format('Y-m-d H:i:s');
                $order->book_block = $date;
                $order->save();
            }
            return (new Response)->setStatusCode(201, 'Success');

        }else{
            return (new Response)->setStatusCode(401, 'Sorry, block ' . $results['factor'] . " already booked.");
        }

        // send the mail to host
        $this->sendEmailWithOrder($request);
    }


    private function checkOrderValidity($selected_blocks){

        foreach ($selected_blocks['slots'] as $selected_block){
            $date = \Carbon\Carbon::parse($selected_block)->format('Y-m-d H:i:s');
            if(Order::where('book_block','=',$date) -> count() >= 4){

                return array('validity' => intval(false),'factor' => $date);
            };
        }

        return array('validity' => intval(true));
    }

    private function sendEmailWithOrder(Request $request){
        $name = $request -> input('name');
        Mail::send('emailViews.order',['request'=>$request->all()],function($message) use($name){
            $to = 'euniceyangjing@gmail.com';
            $message ->to($to)->subject('New Booking: ' . $name);
        });
    }
}
