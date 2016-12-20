@extends('layouts.default')
@section('title', 'GOLF & COCKTAIL BAR')
@section('content')
<style>

    body{
        background-color: black;
        background-image: none;
    }

    .casual_container {
        background: url("static/images/cocktail_bar_center.png") 0 0 no-repeat;
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
        height: 70%;
        max-height: 70%;
        bottom: 40px;
        top: 15%;
        left: 12%;
        width: 80%;
        overFlow-x:hidden;
        overFlow-y:scroll;
        position: fixed;

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

    .events-section {
        padding: 30px 10px 30px 10px;
        border-bottom: 2px dotted #cfb154;
        font-family: "work-sans-light";
        font-size:15px;
        color: rgba(255,255,255, 0.7);
        line-height: 1.7em;
    }

    .events-section p{
        margin-bottom: 1em;
    }

    .img-block a:not(:last-child) img{
        padding-bottom: 20px;
        margin-bottom: 20px;
        border-bottom: 2px dotted #cfb154;
    }

    #events_block_title{
        padding:15px 0px;
        text-align: center;
        color:#cfb154;
        font-size: 17px;
        border-bottom: 1px solid #cfb154;
    }

    #business-hours .label {
        display: block;
        margin-left: 10%;
        height: 40px;
        line-height: 40px;
        width: 220px;
        background-color: #cfb154;
        color: black;
        text-transform: uppercase;
        border-radius: 0;
        padding-top: 0px;
        padding-bottom: 0px;
        font-size: 16px;
        font-family: work-sans-bold;
    }

    #business-hours p {
        margin-left: 60px;
    }

    .hours-section {
        padding-bottom: 2em;
    }
    
    .img-block a:hover{
        text-decoration: none;
    }
    
    .img-block a:hover img{
        width: 100%;
    }
    
    #events_introduction{
        line-height: 32px;
    }
    
    #fixed-frame p{
        color: white;
        font-family: work-sans-regular;
        font-size: 14px;
        font-weight: normal;
    }

</style>


<div class="casual_container container-fluid">
</div>

<div id="fixed-frame" class="container">
    <div id="events_block_title">
        <span style="text-transform: uppercase;font-family: work-sans-regular">golf & cocktail bar</span>
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
        <div class="hours-section clearfix">
            <div class="col-md-4">
                <span class="label">Open Hours</span>
            </div>
            <div class="col-md-4">
                <p>MONDAY-WEDNESDAY</p>
                <p>THURSDAY-SATURDAY</p>
                <p>SUNDAY</p>
            </div>
            <div class="col-md-4">
                <p>12:00pm-9:00pm</p>
                <p>12:00pm-Late</p>
                <p>Booking Only</p>
            </div>
        </div>
        <div class="hours-section clearfix">
            <div class="col-md-4">
                <span class="label">Practice Hours</span>
            </div>
            <div class="col-md-4">
                <p>MONDAY-WEDNESDAY</p>
                <p>THURSDAY-FRIDAY</p>
            </div>
            <div class="col-md-4">
                <p>12:00pm-6:00pm</p>
                <p>12:00pm-4:00pm</p>
            </div>
        </div>
        <div class="hours-section clearfix">
            <div class="col-md-4">
                <span class="label">Happy Hours</span>
            </div>
            <div class="col-md-4">
                <p>MONDAY-WEDNESDAY</p>
                <p>THURSDAY-FRIDAY</p>
            </div>
            <div class="col-md-4">
                <p>4:30pm-6:30pm</p>
                <p>5:00pm-6:00pm</p>
            </div>
        </div>
    </div>

    <div class="img-block">
        <!--<a href="#"><img class="golf-img" src="static/images/cocktail_bar-2.png" style="width:100%; height:auto"></a>-->
        <a href="static/images/price_drink.jpg"><img class="golf-img" src="static/images/price_drink.jpg" width="100%"></a>
        <a href="static/images/price_food.jpg"><img class="golf-img" src="static/images/price_food.jpg" width="100%"></a>
    </div>

    <div style="margin:20px auto;text-align: center">
        <button id="bookBtn" type="button" class="btnCustom gold-btn"
                style="padding: 10px 20px;background:transparent;color: #cfb154;font-weight: normal" onclick="showBookWindow()">BOOKING</button>

        <button id="bookBtn" type="button" class="btnCustom gold-btn"
                style="padding: 10px 20px;background:transparent;color: #cfb154;font-weight: normal" value="cocktail" onclick="showEnquiryWindow()" >ENQUIRY</button>

        <a href="coming_events"><button id="bookBtn" type="button" class="btn btnCustom gold-btn"
                                        style="padding: 10px 20px;background:transparent;color: #cfb154;font-weight: normal" href="coming_events">MORE ACTIVITIES</button></a>
    </div>
</div>

<script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>
<script type="text/javascript" src="{!! asset('static/js/jquery.jqzoom.js') !!}"></script>
@stop
