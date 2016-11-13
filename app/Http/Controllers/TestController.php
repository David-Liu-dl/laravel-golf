<?php

namespace App\Http\Controllers;

use App\Enquiry;
use App\Order;
use Mail;

use Illuminate\Http\Request;

class TestController extends Controller
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
        }else{
            return 'Sorry, block ' . $results['factor'] . " already booked.";
        }

        // send the mail to host
        $this->sendEmailWithOrder($request);

        return "Great, done.";
    }


    public function storeEnquiry(Request $request){

        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $typeArray = $request ->input('types');
        $types = $this->typesStr($typeArray);
        $comment = $request->input('comment');

        $enquiry = new Enquiry();
        $enquiry->name = $name;
        $enquiry->phone = $phone;
        $enquiry->email = $email;
        $enquiry->types = $types;
        $enquiry->comment = $comment;
        $enquiry->save();


        return "Great, done.";
    }

    private function typesStr($typeArray){
        $result = "";
        foreach ($typeArray as $type){
            $result .= " | " . $type;
        }
        return $result;
    }

    private function checkOrderValidity($selected_blocks){

        foreach ($selected_blocks['slots'] as $selected_block){
            $date = \Carbon\Carbon::parse($selected_block)->format('Y-m-d H:i:s');
            if(Order::where('book_block','=',$date) -> count() > 0){

                return array('validity' => intval(false),'factor' => $date);
            };
        }

        return array('validity' => intval(true));
    }

    private function sendEmailWithOrder(Request $request){
        $name = $request -> input('name');
        Mail::queue('emailViews.order',['request'=>$request->all()],function($message) use($name){
            $to = '375099857@qq.com';
            $message ->to($to)->subject('New order: ' . $name);
        });
    }
}
