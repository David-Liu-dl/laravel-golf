<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use Mail;

class EnquiryController extends Controller
{
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

        // send the mail to host
        $this->sendEmailWithEnquiry($request);
        return "Great, done.";
    }

    private function typesStr($typeArray){
        $result = "";
        foreach ($typeArray as $type){
            $result .= " | " . $type;
        }
        return $result;
    }

    private function sendEmailWithEnquiry(Request $request){
        $name = $request -> input('name');
        Mail::send('emailViews.enquiry',['request'=>$request->all()],function($message) use($name){
            $to = '375099857@qq.com';
            $message ->to($to)->subject('New enquiry: ' . $name);
        });
    }
}
