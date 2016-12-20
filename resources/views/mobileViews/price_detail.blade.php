@extends('layouts.mobile')

@section('content')
    <style>
        /*.casual_container {*/
            /*background: url("static/images/pricing_bg.jpg") no-repeat center;*/
            /*filter: Alpha(opacity=20);*/
            /*opacity: 1;*/
            /*height: 100%;*/
            /*width: 100%;*/
            /*right: 0;*/
            /*top: 0;*/
            /*background-size: cover;*/
            /*position: fixed;*/
            /*z-index: -1;*/
        /*}*/


        #fixed-frame {
            color: white;
            font-family: work-sans-regular;
            font-size: 14px;
            font-weight: normal;
            line-height: 35px;
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

        #fixed-frame .row{
            margin-top: 40px;
            padding:0px 40px;
            border-bottom: 1px dashed #cfb154;
        }
        
        #fixed-frame .section-header{
            display: block;
            height: 40px;
            line-height: 40px;
            width: 220px;
            font-size: 16px;
            background-color: #cfb154;
            color: black;
            text-align: center;
            font-family: work-sans-bold;
            margin-bottom: 30px;
        }
        #fixed-frame .section-title{
            font-size: 18px;
            color: #cfb154;
            margin-left: -15px;
        }
        #fixed-frame .detail {
            padding-left: 30px;
            padding-bottom: 30px;
        }
        #fixed-frame ul li{
            list-style-type: disc;
            list-style-position: inherit;
        }
        #fixed-frame .cost{
            font-size: 18px;
            font-weight: bold;
        }

    </style>

    <style>
        .golf-info{
            color: #cfb154;
            font-size: 1.0em;
            padding-top: 10px;
        }
        .golf-info p{
            margin:15px;
        }

        .golf-info span{
            margin-left: 10px;
        }


        .events_block_title{
            padding:15px 0px;
            text-align: center;
            color:#cfb154;
            font-size: 13px;
            font-weight: normal;
            border-bottom: 1px solid #cfb154;
        }
    </style>

    <div id="fixed-frame" class="container">
        <div class="events_block_title">
            <span style="text-transform: uppercase;font-family: work-sans-regular">GOLFPLUS PRICING</span>
        </div>
        <div class="row">
            <div class="col-md-4">
                <span class="section-header">HALF AN HOURLY RATE</span>
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">3 PEOPLE OR LESS</span>
                <ul>
                    <li>$<span class="cost">15</span> per person</li>
                    <li>one complimentary drink </li>
                    <li>per person when arrival</li>
                </ul>
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">MORE THAN 3 PEOPLE</span>
                <ul>
                    <li>$<span class="cost">10</span> per person</li>
                    <li>one complimentary drink</li>
                    <li>per person when arrival</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <span class="section-header">PRACTICE HOURS</span>
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">6 HOLES</span>
                <ul>
                    <li>$<span class="cost">19</span> per person</li>
                    <li>Maximum 1 hour</li>
                </ul>
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">9 HOLES</span>
                <ul>
                    <li>$<span class="cost">25</span> per person</li>
                    <li>Maximum 1.5 hour</li>
                </ul>
            </div>
        </div>
        
        <div class="events_block_title" style="margin-top: 50px;">
            <span style="text-transform: uppercase;font-family: work-sans-regular">FUNCTIONS AND PARTIES</span>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <span class="section-header">PAR PACKAGE</span>
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">$30 PER PERSON</span>
                <ul>
                    <li>4-10 people</li>
                    <li>2 hours of using one golf simulator bay</li>
                    <li>one complimentary drink per person</li>
                    <li>one serve of party pies, nuggets & chips</li>
                </ul>
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">$30 PER PERSON</span>
                <ul>
                    <li>11-20 people</li>
                    <li>2 hours of using one golf simulator bay</li>
                    <li>one complimentary drink per person</li>
                    <li>one serve of party pies, nuggets & chips</li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <span class="section-header">BIRDIE PACKAGE</span>
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">$60 PER PERSON</span>
                <ul>
                    <li>2 hours of using the venue privately</li>
                    <li>one house drink per person</li>
                </ul>
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">$70 PER PERSON</span>
                <ul>
                    <li>3 hours of using the venue privately</li>
                    <li>one house drink per person</li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                &nbsp;
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">$100 PER PERSON</span>
                <ul>
                    <li>2 hours of using the venue privately</li>
                    <li>unlimited house drink*</li>
                </ul>
            </div>
            <div class="col-md-4 detail">
                <span class="section-title">$120 PER PERSON</span>
                <ul>
                    <li>3 hours of using the venue privately</li>
                    <li>unlimited house drink*</li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <span class="section-header">PAR PACKAGE</span>
            </div>
            <div class="col-md-8" style="margin-left:-15px;">
                <p>we can tailor your function according to your specific requirements, please contact us on 13000GPLUS for more information</p>
                <p>* house drink includes:</p>
                <p>house tap beer, house spirits, stubbies, ciders, house white, house red, house sparkling.</p>
            </div>
        </div>

        <div style="display:table;margin:0 auto;">
            <!--<div id="events_block_title">
                <span style="text-transform: uppercase;font-family: work-sans-regular">GOLFPLUS PRICING</span>
            </div>-->
            <img src="static/images/pricing-1_mobile.png" style="max-width:100%; height:auto">
            <div style="border-bottom: 2px dotted #cfb154"></div>
            <!--<div id="events_block_title" style="margin-top: 50px;">
                <span style="text-transform: uppercase;font-family: work-sans-regular">FUNCTIONS AND PARTIES</span>
            </div>-->
            <img src="static/images/pricing-2_mobile.png" style="max-width:100%; height:auto">
        </div>

    </div>
@stop
