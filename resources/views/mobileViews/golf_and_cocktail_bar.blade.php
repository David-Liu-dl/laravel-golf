@extends('layouts.mobile')

@section('content')
    <style>
        .casual_container {
            background: url("static/images/slider3.png") 0 0 no-repeat;
            filter: Alpha(opacity=20);
            opacity: 0.2;
            height: 100%;
            width: 100%;
            right: 0;
            top: 0;
            background-size: cover;
            position: fixed;
        }

        #fixed-frame {
            /*height: 80%;*/
            /*max-height: 80%;*/
            /*bottom: 40px;*/
            /*top: 10%;*/
            /*right: 5%;*/
            /*left: 5%;*/
            /*width: 90%;*/
            /*overFlow-x:hidden;*/
            overFlow-y:scroll;

        }

        #fixed-frame a {
            color: white;
            line-height: 30px;
            font-size: 12px;
        }

        ::-webkit-scrollbar {
            width:10px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border:1px solid #cfb154;
        }
        ::-webkit-scrollbar-thumb {
            background: #cfb154;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
        }
        ::-webkit-scrollbar-thumb:window-inactive {
            background: #cfb154;
        }

        .img-block a:not(:last-child) img{
            padding-bottom: 20px;
            margin-bottom: 20px;
            border-bottom: 1px dashed #cfb154;
        }

        .gold-btn{
            padding: 5px 15px;
            font-size: 10px;
            background: #cfb154;
            color: black;
            font-weight: normal;
            margin:10px;
        }
    </style>


    <div class="casual_container container-fluid">
    </div>

    <div id="fixed-frame" class="container">
        <div class="img-block">
            <a href="#"><img class="golf-img" src="static/images/cocktail_bar.png" style="width:100%; height:auto"></a>
            <a href="static/images/price_drink.jpg"><img class="golf-img" src="static/images/price_drink.jpg" width="100%"></a>
            <a href="static/images/price_food.jpg"><img class="golf-img" src="static/images/price_food.jpg" width="100%"></a>
        </div>

        <div style="margin:10px 0px 0px 0px;text-align: center">
            <a><button id="bookBtn" type="button" class="btnCustom gold-btn" onclick="showBookWindow()">BOOKING</button></a>

            <a><button id="bookBtn" type="button" class="btnCustom gold-btn" onclick="showEnquiryWindow()">ENQUIRY</button></a>

            <a href="coming_events"><button id="bookBtn" type="button" class="btn btnCustom gold-btn"href="coming_events">ACTIVITIES</button></a>
        </div>
    </div>

    <script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/jquery.jqzoom.js') !!}"></script>
@stop
