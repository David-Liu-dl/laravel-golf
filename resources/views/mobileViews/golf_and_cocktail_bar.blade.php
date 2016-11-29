@extends('layouts.mobile')

@section('content')
    <style>
        #fixed-frame {
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
            padding: 5px 10px;
            font-size: 13px;
            background: #cfb154;
            color: black;
            font-weight: normal;
            margin:5px;
        }
    </style>

    <div id="fixed-frame" class="container">
        <div class="img-block">
            <a href="#" rel="external"><img class="golf-img" src="static/images/cocktail_bar_mobile.png" style="width:100%; height:auto"></a>
            <a href="static/images/price_drink.jpg" rel="external"><img class="golf-img" src="static/images/price_drink.jpg" width="100%"></a>
            <a href="static/images/price_food.jpg" rel="external"><img class="golf-img" src="static/images/price_food.jpg" width="100%"></a>
        </div>

        <div style="margin:10px 0px 0px 0px;text-align: center">
            <a><button id="bookBtn" type="button" class="btnCustom gold-btn" onclick="showBookWindow()">BOOKING</button></a>

            <a><button id="bookBtn" type="button" class="btnCustom gold-btn" onclick="showEnquiryWindow()">ENQUIRY</button></a>

            <a href="coming_events" rel="external"><button id="bookBtn" type="button" class="btn btnCustom gold-btn">ACTIVITIES</button></a>
        </div>
    </div>

    <script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/jquery.jqzoom.js') !!}"></script>
@stop
