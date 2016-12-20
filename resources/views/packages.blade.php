@extends('layouts.default')
@section('title', 'ACADEMY')
@section('content')
<link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css') }}" rel="stylesheet">
<link href="{{ asset('/static/css/package.css') }}" rel="stylesheet">
<style>
    body {
        overflow-x:hidden;
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

    #enquiry_window{
        -moz-border-radius: 6px;
        border-radius: 6px;
        background: white;
        width: 20%;
        max-width: 700px;
        min-width: 400px;
        padding:10px 20px;

        position: fixed; /* or absolute */
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999;
        display: none;
    }

    #enquiry_window .input-group-addon,#enquiry_window input.transparent-input{
        background-color:rgba(0,0,0,0) !important;
        border:none;
        /*color:black;*/
    }

    .input-group-addon{
        color: #cfb154;
    }

    label.btn span {
        font-size: 1.5em ;
    }

    #enquiry_form_title{
        text-align: center;
        font-size: 20px;
        color:#b5a37e;
    }

    .input_container{
        width:100%;
        padding:5px 5px;
        margin:10px 0px;
        border:1px solid #cfb154;
        border-radius: 6px;
    }

    .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
        width: 100%;
    }

    .btn-full{
        width:100%;
        background: #cfb154;
        font-weight: normal;
        color: white;
    }

    .input-group-addon{
        width: 23%;
    }

    .bootstrap-select.btn-group .dropdown-toggle .filter-option{
        text-overflow:ellipsis;
        width: 95%;
    }

    label.error {
        color: red;
        font-weight: normal;
        font-size: 12px;
    }

    input.error {
        color: red;
    }

    #events_block_title{
        padding:15px 0px;
        text-align: center;
        color:#cfb154;
        font-size: 17px;
        font-weight: normal;
        border-bottom: 1px solid #cfb154;
    }
    .intro-section{
        padding: 20px 0px 20px 0px;
        font-size:15px;
        color: rgba(255,255,255, 0.7);
        line-height: 1.7em;
    }

    .intro-section p{
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .dotted-line{
        border-bottom: 3px dotted #cfb154; 
        width: 70%; 
        text-align: center; 
        margin: 0px auto 30px auto;
    }

    #package-fixed .sub-title{
        color: rgb(191, 155, 58);
        text-transform:uppercase;
        line-height: 30px;
        margin-top: 20px;
        text-transform: uppercase;
        padding:15px 0px;
        font-size: 17px;
        font-weight: normal;
    }

    #package-fixed .mini-title{
        color: rgb(176, 122, 41);
        text-transform:uppercase;
        font-size: 16px;
        line-height: 30px;
        margin-bottom: 20px;
    }
    #package-fixed .mini-title span{
        border-bottom: 1px solid rgb(176, 122, 41);
        padding-bottom: 5px;
    }
    #package-fixed{
        font-family: work-sans-regular;
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
    }

</style>

<div class="container" id="package-container"></div>
<div class="container" id="package-fixed">
    <div id="events_block_title">
        <span style="text-transform: uppercase;">Introduction</span>
    </div>

    <div class='intro-section'>
        <p>In Golf Plus Academy we believe the game of golf is never just about swing, we are trying help different levels golfers to gain maximal improvement from different aspects, We have a serious emphasis on each student reaching their maximum potential. The GPlus academy in conjunction with Golfzon Simulation is the forefront in modern day golf coaching and training. The combination of specific biomechanical analysis during the driving range mode and the ability to enhance game play on one of the 200 golf courses around the world makes all lessons more efficient and effective.</p>
        <p>If you are seeking to take your game to the next level, we strongly recommend getting involved in our extensive range of specific programs. We have devised a series of formulated packages that are guaranteed to enhance all aspects of your game.</p>
        <p>Click on each link to learn more about the respective package and book in today. The first step to unlocking your true potential is one click away!!!</p>
    </div>

    <div class="dotted-line"></div>

    <p class="sub-title">COACHING INTRODUCTION</p>
    <p class="mini-title"><span>BRANDON RAVE</span></p>
    <!--<div class='people'></div>-->
    <div class='intro-section' style="padding-top: 10px;">
        <p>As a PGA certified professional coach, Brandon is well versed with the latest concepts in golf analysis, biomechanics and strength and conditioning.<img style="float:right;margin:5px;width:200px;" src='static/images/coach_rave_1.jpg' class="img-responsive"></p>
        <p>Brandon has a wealth of experience coaching all levels of golfers given his previous coaching roles at The Yarra Valley Country Club and GolfTec Melbourne.</p>
        <p>Brandon gets the most out of every student by understanding their body patterns and formulating the best regimen for them. Furthermore, all of his packages include constant consulting and all of his students receive their swings and analysis via email.</p>
        <p>“We are truly blessed as coaches to have GPlus Academy at our disposal as it is simply the best technology and regimented training tool in the world”.</p>
    </div>

    <p class="mini-title"><span>MATT JAGER</span></p>
    <div class='intro-section' style="padding-top: 10px; border-bottom: 2px dotted #cfb154;margin-bottom:40px ">
        <p><img style="float:right;margin:5px;width:200px;" src='static/images/coach_1.jpg' class="img-responsive">Matt turned professional in 2010 as one of the most exciting talents in the country. Born in Perth, Western Australia, Matt was an Australian Amateur and Dual New Zealand Amateur Champion and represented Australia in the World Amateur Team Championship. As a student of the game, Matt has since moved to Melbourne to further his golfing career.</p>
        <p>From the word championship....As an elite professional, Matt has learned from the best players and coaches in the golf industry. His experience as a tour player and knowledge of the modern swing make him a  great asset to our team at GPlus.</p>
    </div>

    @foreach( $packages as $package)
    <div class="package-item-container">
        <div>
            <p class="title">{{ $package['title'] }}</p>
            <p class="desc">{{ $package['description'] }}</p>
        </div>
        <div class="row row-eq-height" style="margin-top: 20px;">
            <div class="col-md-8">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="{{ $package['video_url'] }}"></iframe>
                </div>
            </div>
            <div class="col-md-4" id="package-content">
                <p>PACKAGE INCLUDE</p>
                @foreach( $package['features'] as $feature)
                <p> {{ $feature }}</p>
                @endforeach
                <p>${{ $package['price'] }}</p>
                <button class="quick-enquiry-btn enquiry" value="{{"Lesson:" . $package['title']}}">ENQUIRY</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

@stop