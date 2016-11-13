
@extends('layouts.default')

@section('content')
    <style>
        #info-block p {
            display:inline-block;
            line-height: 25px;
            font-size: 16px;
        }

        #info-block p:not(:first-child) {
            font-size: 14px;
        }

        #title{
            font-size:20px;
        }

        #fd-window{
            position: fixed; /* or absolute */
            width: 850px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
            color: #cfb154;
            background: #000000;
            border: 1px solid #cfb154;
            font-family: "work-sans-regular", serif;
        }

        #fd-title-block{
            margin: 0px 20px;
            padding: 20px 20px;
            border-bottom: 1px solid #cfb154;
        }

        .gold-btn{
            margin-top: 30%;
            margin-left: 0px;
            font-size: 16px;
        }
    </style>

    <div id="fd-window">
        <div id="fd-title-block" class="row">
            <div id="title" class="col-xs-10">
                <label>TOURNAMENT BOOKING</label>
            </div>
            <div class="col-xs-2" style="text-align: right;padding: 0px;margin-top: 0px;">
                <a href="#" onClick="">
                    <i style="font-size: 20px;font-weight: normal;color:#cfb154" class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div id="info-block" style="text-align: center;padding:8% 0px 12%;">
            <p style="padding: 10px 0px;font-weight: bold">THANK YOU!</p><br/>
            <p>YOUR BOOKING INFORMATION IS CONFIRMED</p><br/>
            <p>THE COMFIRMATION WILL SENT TO YOUR EMAIL ADDRESS</p><br/>
            <p>FOR MORE DETAILS. PLEASE CONTACT US ON</p><br/>
            <p style="border-bottom: 1px solid #cfb154">03 9600 0988</p><br/>
            <p><a type="button" class="btnCustom gold-btn" href="">CLOSE</a></p>
        </div>

    </div>

    <script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>
@stop
