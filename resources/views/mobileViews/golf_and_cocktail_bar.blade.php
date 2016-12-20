@extends('layouts.mobile')

@section('content')
    <style>

        #fixed-frame {
            padding: 5% 5%;
            height: 100%;
            margin: 0px;
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

        .img-block {
            margin-top: 34px;
        }

        .gold-btn{
            padding: 5px 10px;
            font-size: 13px;
            background: #cfb154;
            color: black;
            font-weight: normal;
            margin:5px;
        }

        #events_block_title{
            padding:15px 0px;
            text-align: center;
            color:#cfb154;
            font-size: 13px;
            font-weight: normal;
            border-bottom: 1px solid #cfb154;
        }

        .events-section {
            padding: 25px 0px 25px 0px;
            border-bottom: 2px dotted #cfb154;
            font-family: "work-sans-light";
            font-size: 13px;
            color: rgba(255,255,255, 0.7);
            line-height: 1.7em;
        }

        .hours-section .hours {
            padding: 20px 0px 40px 0px;
        }

        .hours-section .day-of-week{
            float: left;
            width: 60%;
        }

        .hours-section .time{
            float: left;
            width: 40%;
        }

        #business-hours .label {
            display: block;
            width: 60%;
            height: 40px;
            margin: 0 auto;
            margin-bottom: 10px;
            line-height: 40px; 
            background-color: #cfb154;
            color: black;
            font-family: "work-sans-bold";
            font-size: 1em;
            text-transform: uppercase;
            border-radius: 0;
            padding-top: 0px;
            padding-bottom: 0px;
        }
        
        #business-hours{
            padding-left: 0px;
            padding-right: 0px;
        }
        
        .gold-button{
            font-size: 15px;
            width:60%;
            height: 40px;
            line-height: 40px;
            background-color: transparent;
            color: #cfb154;
            border: 1px solid #cfb154;
            margin-bottom: 10px;
            padding: 0px;
        }


    </style>


        <div id="events_block_title">
            <span style="text-transform: uppercase;font-family: work-sans-regular">golf&cocktail bar</span>
        </div>

        <div id="events_introduction" class="events-section">
            <p>
                GPlus's breathtaking array of premium cocktails and spirits is derived from the best menus in the world with a slight twist. Each item on our menu is infused with golf terminology to get you and your colleagues into the swing of things. Furthermore, there is a drink on the menu to suit every individual much like the game of golf requires all types to enjoy our historic game.
            </p>
            <p>
                The game of golf is to be enjoyed with friends over the finest quality beverages as per the games humble beginnings all those years ago. Staff from GPlus pride themselves on attention to detail in their mixology and have vast knowledge in the game of golf to ensure you and your colleagues have a night to remember.
            </p>
        </div>

        <div id="business-hours" class="events-section">
            <div class="hours-section">
                <div>
                    <span class="label">Open Hours</span>
                </div>

                <div class="hours clearfix">
                    <div class="day-of-week">
                        <p>MONDAY-WEDNESDAY</p>
                        <p>THURSDAY-SATURDAY</p>
                        <p>SUNDAY</p>
                    </div>
                    <div class="time">
                        <p>12:00pm-9:00pm</p>
                        <p>12:00pm-Late</p>
                        <p>Booking Only</p>
                    </div>
                </div>
            </div>

            <div class="hours-section">
                <div>
                    <span class="label">Practice Hours</span>
                </div>
                <div class="hours clearfix">
                    <div class="day-of-week">
                        <p>MONDAY-WEDNESDAY</p>
                        <p>THURSDAY-FRIDAY</p>
                    </div>
                    <div class="time">
                        <p>12:00pm-6:00pm</p>
                        <p>12:00pm-4:00pm</p>
                    </div>
                </div>
            </div>

            <div class="hours-section">
                <div>
                    <span class="label">Happy Hours</span>
                </div>
                <div class="hours clearfix">
                    <div class="day-of-week">
                        <p>MONDAY-WEDNESDAY</p>
                        <p>THURSDAY-FRIDAY</p>
                    </div>
                    <div class="time">
                        <p>4:30pm-6:30pm</p>
                        <p>5:00pm-6:00pm</p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="img-block">
            <a href="static/images/price_drink.jpg" rel="external"><img class="golf-img" src="static/images/price_drink.jpg" width="100%"></a>
            <a href="static/images/price_food.jpg" rel="external"><img class="golf-img" src="static/images/price_food.jpg" width="100%"></a>

        </div>

        <div style="margin:10px 0px 0px 0px;text-align: center">
            <p><a><button id="bookBtn" type="button" class=" gold-button" onclick="showBookWindow()">BOOKING</button></a></p>

            <p><a><button id="bookBtn" type="button" class=" gold-button" value="cocktail" onclick="showEnquiryWindow()">ENQUIRY</button></a></p>

            <p><a href="coming_events" rel="external"><button id="bookBtn" type="button" class="btn gold-button">ACTIVITIES</button></a></p>
        </div>


    <script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/jquery.jqzoom.js') !!}"></script>
@stop
