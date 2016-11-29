@extends('layouts.mobile')

@section('content')
    <?php
        if (!empty($_GET)) {
            $eventId = $_GET['event'];
        }
    ?>

    <style>

        #fixed-frame {
            height: 80%;
            max-height: 80%;
            bottom: 40px;
            top: 10%;
            right: 5%;
            left: 5%;
            width: 90%;
            overFlow-x:hidden;
            overFlow-y:scroll;
            /*position: fixed;*/
        }

        #fixed-frame p {
            color: white;
            line-height: 30px;
            font-size: 12px;
            filter: Alpha(opacity=60);
            opacity: 0.6;
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
    </style>

    <style>
        /*
         * Row with equal height columns
         * --------------------------------------------------
         */
        .row-eq-height {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
        }

        .row-eq-height [class*="col-"] {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        /* end */

        #events_block_title{
            padding:15px 0px;
            text-align: center;
            color:#cfb154;
            font-size: 17px;
            font-weight: normal;
            border-bottom: 1px solid #cfb154;
        }

        .event_container{
            margin:10px 0px;
        }

        .event_container:not(:first-child){
            margin:30px 20px 0px 0px;
        }

        .event_img_container{
            margin: 0px auto;
        }

        .event_img{
            width: 100%;
        }

        .event_info_container{
            color: white;
            font-family: 'work-sans-light';
            font-size: 14px;
            font-weight: normal;
            text-align: left;
        }
        .event_title{
            font-family: 'work-sans-bold';
            margin: 20px auto;
            font-size: 20px;
            font-weight:bold;
            color: #cfb154;
        }
        .event_description{
            margin:20px 0px;
            line-height:25px;
            word-wrap: break-word;
        }
        .event_date{
            margin:15px 0px;
        }
        .event_location{
            margin:15px 0px;

        }
        .event_price{
            margin:15px 0px;

        }

        .entry_btn{
            background: #cfb154;
            font-family: 'work-sans-regular';
            color: black;
            font-size: 1.0em;
            font-weight: 500;
        }

    </style>

    <div id="fixed-frame" class="container">
        <div>
            <div id="events_block_title">
                <span>GPLUS ACTIVITIES</span>
            </div>

            <div id="event_block" >
                @foreach($events as $event)
                    <div class="event_container" id="">
                        <div class="event_img_container">
                            <img src= "{{$event['originalImg']}}" class="img-responsive event_img" alt="Cinque Terre"/>
                        </div>
                        <div class="">
                            <div class="event_info_container">
                                <div class="event_title">{{$event['title']}}</div>
                                <div class="event_description">{{$event['introduction']}}</div>
                                <div class="event_date"><label>DATE:&nbsp;</label><span >{{$event['date']}}</span></div>
                                <div class="event_location"><label>PLACE:&nbsp;</label><span >{{$event['address']}}</span></div>
                                <div class="event_price"><label>ENTRY FEE:&nbsp;</label><span class="event_location">{{$event['price'] . "AUD"}} </span></div>
                            </div>

                            <div><button class="btnCustom info-btn entry_btn quick-enquiry-btn">ENTRY NOW</button></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@stop
