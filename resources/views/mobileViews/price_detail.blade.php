@extends('layouts.mobile')

@section('content')
    <style>
        .casual_container {
            background: url("static/images/pricing_bg.jpg") no-repeat center;
            filter: Alpha(opacity=20);
            opacity: 1;
            height: 100%;
            width: 100%;
            right: 0;
            top: 0;
            background-size: cover;
            position: fixed;
            z-index: -1;
        }


        #fixed-frame {
            overFlow-y:auto;
            overFlow-x:hidden;
            padding: 0px;
            font-family: work-sans-regular
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


        #events_block_title{
            padding:15px 0px;
            text-align: center;
            color:#cfb154;
            font-size: 13px;
            font-weight: normal;
            border-bottom: 1px solid #cfb154;
        }
    </style>

    <div class="casual_container container-fluid">
    </div>

    <div id="fixed-frame" class="container" style="text-align: center">
        <div style="display:table;margin:0 auto;">
            <div id="events_block_title">
                <span style="text-transform: uppercase;font-family: work-sans-regular">GOLFPLUS PRICING</span>
            </div>
            <img src="static/images/pricing-1_mobile.png" style="max-width:100%; height:auto">
            <div style="border-bottom: 2px dotted #cfb154"></div>
            <div id="events_block_title" style="margin-top: 50px;">
                <span style="text-transform: uppercase;font-family: work-sans-regular">FUNCTIONS AND PARTIES</span>
            </div>
            <img src="static/images/pricing-2_mobile.png" style="max-width:100%; height:auto">
            <div class="golf-info row" style="">
                <div class="col-xs-5 .col-sm-5 .col-lg-4" style="padding:0px;text-align:left;font-size: 0.6em;">
                    <p class="pointer icon">
                        <a target="_blank" style="color:#cfb154;text-decoration: none;" href="https://www.facebook.com/golfplusbar/"><i class="fa fa-facebook-square"></i>
                            <span>@golfplusbar</span></a>
                    </p>
                    <p class="pointer icon">
                        <a target="_blank" style="color:#cfb154;text-decoration: none;" href="https://twitter.com/GolfplusBar"><i class="fa fa-tumblr-square"></i>
                            <span>@GolfplusBar</span></a>
                    </p>
                    <p class="pointer icon">
                        <a target="_blank" style="color:#cfb154;text-decoration: none;" href="https://www.instagram.com/golfplusbar/"><i class="fa fa-instagram" aria-hidden="true"></i>
                            <span>golfplusbar</span></a>
                    </p>
                </div>
                <div class="col-xs-7 .col-sm-7 .col-lg-8" style="padding:0px;text-align: right;font-size: 0.6em;">
                    <p class="text-uppercase">more information contact to:</p>
                    <p>1300047587</p>
                    <p>www.golfplus.net.au</p>
                    <p>info@golfplus.net.au</p>
                </div>
            </div>
        </div>



    </div>
@stop
